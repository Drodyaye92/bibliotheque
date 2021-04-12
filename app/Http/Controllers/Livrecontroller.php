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

    $livres= DB::select('select * from livres');
            //    dd($livres);
            //  return view('liste',['livres'=>$livres]);
              // dd($livres);

    $resultat = DB::insert('insert into livres (titre, type, dateparution,id_auteurl) values (?, ?, ?,?)', $data);
    
    return view('liste')->with(['livres'=>$livres]);   
}

       
}
