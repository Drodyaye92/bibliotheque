@extends('layout.master')



@section('contenu')<div class="contenu justify-content-center">

<div class="container d-flex justify-content-center">
     <div class="group-form">
        <div class="img"> <img src="assets/images/bibliologo.PNG" class="rounded" alt=""></div>
            <div class="input ">
                <form action="{{ route ('authentificate')}}" method="POST">
                 @csrf
                     <input type="text" class="form-control m-3" name="email" placeholder="email">
                     <input type="password" class="form-control m-3" name="password" placeholder="password">
                     <button type="submit" class="btn btn-primary" name="">Connexion</button>
                     <div class="para"><p>Voulez vous creer un compte?<span class="red"><a href="{{ route ('inscription')}}">Inscription</a></span></p></div>
                </form>
            </div>
     </div>
</div>
</div>
@include('include.footer') 
@endsection



  