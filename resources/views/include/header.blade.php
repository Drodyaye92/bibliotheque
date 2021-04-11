@extends('layout.master')



    <header>
        <div class="container-fluid">
              <div class="row">
                    <div class="col-lg-6"><img src="assets/images/bibliologo.PNG"  alt=""></div> 
                    <div class="search col-6"><input type="text" class="form-control w-50" placeholder="Rechercher"></div> 
              </div>
        </div>
        <div class="container-fluid">
            <div class="row rouge bg-danger ">
              <div class="col-3">Connexion</div>
              <div class="col-3">Ajouter</div>
              <div class="col-3">Lister</div>
              <div class="col-3">Profil</div>
            </div>
        </div>
     </header>
     @section('contenu')<div class="contenu ">
 