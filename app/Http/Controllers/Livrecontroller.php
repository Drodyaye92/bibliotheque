<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Livrecontroller extends Controller
{
    //
    public function enregistrer(){
        return view('enregister');
    }
    

public function save(Request $request){
    $datas=request()->validate([
        'titre'=>'required|string',
        'type'=>'required|string',
        'dateparution'=>'required',
        //'id_auteur'=>'required|string'
    ]);
    

    $datas = [
        $request->input('titre'),
        $request->input('type'),
        $request->input('dateparution'),
        $request->input('id_auteur'),  
    ];
    $resultats = DB::insert('insert into livres (titre, type, dateparution, id_auteur) values (?, ?, ?, ?)', $datas);
    return view('liste');   
}

    

    
}
