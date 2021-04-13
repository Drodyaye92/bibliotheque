<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Livrecontroller extends Controller
{
    //
    public function enregistrer(){
        return view('enregister');
    }
    

public function save(Request $request){
    $data=request()->validate([
        'titre'=>'required|string',
        'type'=>'required|string',
        'dateparution'=>'required',
        'auteur'=>'required|string'
    ]);
    

    $data = [
        $request->input('titre'),
        $request->input('type'),
        $request->input('dateparution'),
        $request->input('auteur'),  
    ];

    $livres= DB::select('select * from livres order by titre');
   
    $resultat = DB::insert('insert into livres (titre, type, dateparution,id_auteurl) values (?, ?, ?,?)', $data);

    return view('liste')->with(['livres'=>$livres]);
       

      
}
public function supprime(Request $request){

   /*$resultat=DB::select('select from livres (titre, type, dateparution,id_auteurl)',['data'] );
    $titre = $request->input('titre');
    $type = $request->input('type');
    $dateparution = $request->input('dadeparution');
    $id_auteurl = $request->input('id_auteurl');
    $del = DB::delete('delete from livres where titre=?, type=?, dateparution=?, id_auteurl=?',['data']);*/
    DB::delete('delete from livres where id_livre='.$request->input('titre'));
    return redirect()->route('lister');
}

       
}
