<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\utilisateur;
use App\livre;
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

    DB::delete('delete from livres where id_livre='.$request->input('titre'));
    return redirect()->route('lister');
}
public function take(Request $request){
    $datas = [
        $request->input('id_livre'),
        $request->input('titre'),
        $request->input('type'),
        $request->input('dateparution'),
        $request->input('id_auteurl'),
    ];
    $request=DB::select('select * from livres');
    return view('take');

}

public function update(Request $request){
     $data = [
         $request->input('id_livre'),
         $request->input('titre'),
         $request->input('type'),
         $request->input('dateparution'),
         $request->input('id_auteurl'),
     ];
     $livre=livre::find($data[0]);
     $livre->titre=$data[1];
     $livre->type=$data[2];
     $livre->dateparution=$data[3];
     $livre->id_auteurl=$data[4];
    //  update(['titre'=>$data[1], 'type'=>$data[2], 'dateparution'=>$data[3], 'id_auteurl'=>$data[4]]);
     $livre->save();
    $alert= '<script>alert(<h3 class="text-success">Enregister avec succès</h3>)</script>';
    return redirect()->route('lister')->with('$alert');
    
   
    //return redirect()->route('parametre');
}
public function auteur(){
    $auteurs= DB::select('select * from auteurs order by titre');
   
    return view('classer');
}
public function dateclass(Request $request)
{     
    $nbreLivre = livre::all();
    //$livres = livre::all()->groupBy('id_auteurl')->toArray();

    // $livres = livre:: table('livres')
    //          ->select('dateparution', DB::raw('count(*) as total'))
    //          ->groupBy('')
    //          ->pluck('total','auteurs')->all();

    // $livres = livre::orderBy('created_at')->get()->groupBy(function($data){
    //     return $data->created_at->format('Y-m-d');
    // });
    // dd($livres);

    return view('classer', compact('nbreLivre'));
}

            

       
}
