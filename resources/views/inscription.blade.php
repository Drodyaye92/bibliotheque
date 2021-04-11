@extends('layout.master')
@section('contenu')<div class="contenu ">
  <div class="container">
        <div class="row justify-content-center">
             <div class="img"> <img src="assets/images/bibliologo.PNG" class="rounded" alt=""></div>
                <div class="input w-25 ">
                     <form action="{{ route('inscrit.store')}}" method="POST">
                     @csrf
                             <input type="text" class="form-control m-3" name="nom" placeholder="nom">
                             <input type="text" class="form-control m-3" name="prenom" placeholder="Prenom">
                             <input type="text" class="form-control m-3" name="email" placeholder="email">
                             <input type="password" class="form-control m-3" name="password" placeholder="password">
                             <button type="submit" class="btn btn-primary">Inscription </button>
                             <div class="para">
                                 <p>Avez vous un compte?<span class="red"><a href="{{ route ('connexion')}}">Connexion</a></span></p>
                             </div>
                     </form>
                </div>
            </div>
         </div>
   </div>
 @endsection