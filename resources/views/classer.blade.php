@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu justify-content-center">
<div class="container">
    <div class="row">
         <div class="col-lg-4">
               <h4> Mon profil</h4>
               <img src="assets/images/images.png" alt="" class="my-3" >
               <p>Nom:</p>
               <p>Prenom</p>
              <button type="submit" class="btn btn-info " name="">Modifier</button>
         </div>
         <div class="col-lg-8">
            <section class="secte">
                <h3 class="secte4">Le stock de livre:{{$nbreLivre->count()}}livres au total </h3>   
                <h2> </h2>     
            </section>  
         </div>
    </div>
</div>
</div>

@include('include.footer') 
@endsection