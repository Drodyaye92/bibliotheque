@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu ">
<div class="container">
<div class="row">
 
  <div class=" col-lg-6 border">
  <form action="{{ route('auteur.save')}}" method="POST">  
              @csrf 
                <div class="input">
                     <h3 class="para m-5 justify-content-center">Enregister Auteur</h3>
                         <input type="text" class="form-control m-3" name="nom" placeholder="nom">
                         <input type="text" class="form-control m-3" name="prenom" placeholder="prenom">
                         <input type="text" class="form-control m-3" name="pays" placeholder="pays">
                         <button type="submit" class="btn btn-primary" name="">Enregistrer</button>
               </div>
    </form>
  </div>
  <div class=" col-lg-6 border">
          <form action="{{route('enregister.save')}}" method="POST">  
              @csrf 
                <div class="input">
                     <h3 class="para m-5 justify-content-center">Enregister un livre</h3>
                         <input type="text" class="form-control m-3" name="titre" placeholder="Titre">
                         <input type="text" class="form-control m-3" name="type" placeholder="Type">
                         <input type="date" class="form-control m-3" name="dateparution" placeholder="Date de parution">
                         <select name="auteur" id="">
                             <optgroup label="">
                                @foreach($id_auteur as $id_auteur)
                                <option value="{{$id_auteur->id_auteur}}">{{$id_auteur->nom}} {{$id_auteur->prenom}}</option>
                                 @endforeach
                            </optgroup>
                         </select>
                         <button type="submit" class="btn btn-primary" name="">Enregistrer</button>
               </div>
          </form>
  </div>
</div>
</div>
</div>
@endsection