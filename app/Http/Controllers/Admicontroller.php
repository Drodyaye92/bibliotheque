<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuninate\support\fascades\Redirect;

class Admicontroller extends Controller
{
    //
    public function auteur(){
        return view('liste');
    }
    

public function save(Request $request){
    $datas=request()->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'pays'=>'required|string',
       
    ]);
    

    $datas = [
        $request->input('nom'),
        $request->input('prenom'),
        $request->input('pays'),   
    ];
    $resultats = DB::insert('insert into auteurs (nom, prenom, pays) values (?, ?, ?)', $datas);
    $id_auteur= DB::select('select id_auteur,nom,prenom from auteurs');
    //return back('enregister')->withInput('veuillez completer le formulaire suivant');  
    return view('enregister', ['id_auteur'=>$id_auteur]);
}

    

    
}
