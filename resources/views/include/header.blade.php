@extends('layout.master')
 <header>
        <div class="container-fluid">
              <div class="row">
                    <div class="col-lg-6"><img src="assets/images/bibliologo.PNG"  alt=""></div> 
                    <div class="search col-4 d-d-inline "><input type="text" class="form-control " placeholder="Rechercher">
                    </div>
                    <div  class=" search col-lg-2">
                    <button type="submit" class="btn btn-primary"> envoyer</button>
                    </div>
              </div>
        </div>
        <div class="container-fluid">
            <div class="row rouge bg-danger">
              <div class="col-3"><a href="">Connexion</a></div>
              <div class="col-3"><a href="">Ajouter</a></div>
              <div class="col-3"><a href="">Lister</a></div>
              <div class="col-3"><a href="">Profif</a></div>
            </div>
        </div>
 </header>
     @section('contenu')<div class="contenu ">
 