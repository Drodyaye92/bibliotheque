<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\utilisateur;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\bcrypt;

class Authcontroller extends Controller
{
        public function enregister(){
return view('enregister');
        }
    public function administrateurs(){
        $administrateurs = DB::select('select * from administrateurs');
       
        print_r(Session::get('email'));

      
    }
    public function authentificate(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $inputs = [
            $request->input('email'),
            $request->input('password')
        ];
        $credentials = $request->only('email','password');
        //stocker les auteurs
        $id_auteur= DB::select('select id_auteur,nom,prenom from auteurs');
        
        if (Auth::attempt($credentials)){
            
           // print_r($id_auteur);
        return view('enregister', ['id_auteur'=>$id_auteur]);
        }else{
            return view('connexion');
        }
        /* if ($credentials) {
       
            return view ('enregister');
         }
        else{
              return ('erreur');
            }*/
     }
    


       public function inscrit(){
            return view('inscription');
        }
        

    public function store(Request $request){
        $data=request()->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        
    
        $data = [
            $request->input('nom'),
            $request->input('prenom'),
            $request->input('email'),
            $pass = bcrypt($request->input('password'))
        ];
        $resultat = DB::insert('insert into users (nom, prenom, email, password) values (?, ?, ?, ?)', $data);
        return view('connexion');   
    }
   
}
