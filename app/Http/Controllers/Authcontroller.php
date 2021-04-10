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
    
    public function administrateurs(){
        $administrateurs = DB::select('select * from administrateurs');
        //$livres = DB::select('select * from livres');
        print_r(Session::get('email'));

       // return view('/');
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

       // $administrateur=$request= DB::select('select nom, prenom, email, password from administrateurs');
      //  Session::put('email', $inputs[0]);

        if (Auth::attempt($credentials)) {
            $results = DB::select('select * from administrateurs where email=? AND password=?',$inputs);
            return view('inscription');
         }
        // else{
          //     return ('erreur');
           //  }
     }
        // if (Auth::attempt($credentials)) {
        //     $resultat = DB::select('email,from administrateur where email =?', [$inputs[0]]);
        //     return redirect('/')->with('sa marche');
        // }
       //else{
        //   return ('erreur');
        // }
    //}








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
        $resultat = DB::insert('insert into administrateurs (nom, prenom, email, password) values (?, ?, ?, ?)', $data);
        return view('connexion');   
    }
   
}
