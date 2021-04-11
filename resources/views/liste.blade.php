@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu ">
<div class="border">
         <div class="input w-25 ">
              <h3 class="para m-5 justify-content-center">Enregister</h3>
              <form >
                     <input type="text" class="form-control m-3" name="titre" placeholder="Titre">
                     <input type="text" class="form-control m-3" name="auteur" placeholder="Auteur">
                     <input type="text" class="form-control m-3" name="type" placeholder="Type">
                     <input type="text" class="form-control m-3" name="pays" placeholder="Pays">
                     <input type="date" class="form-control m-3" name="date" placeholder="Date">
                     <input type="text" class="form-control m-3" name="etagere" placeholder="Etagere">
                     <button type="submit" class="btn btn-primary" name="">Enregistrer</button>
              </form>
         </div>
</div>
</div>
@endsection