@extends('layout.master')
@section('contenu')<div class="contenu ">



<div class="container">
     <div class="row justify-content-center">
        <div class="img"> <img src="assets/images/bibliologo.PNG" class="rounded" alt=""></div>
            <div class="input w-25 ">
                <form action="{{ route ('authentificate')}}" method="POST">
                 @csrf
                     <input type="text" class="form-control m-3" name="email" placeholder="email">
                     <input type="password" class="form-control m-3" name="password" placeholder="password">
                     <button type="submit" class="btn btn-primary" name="">Connexion</button>
                     <div class="para"><p>Voulez vous creer un compte?<span class="red"><a href="login.blade.php">Inscription</a></span></p></div>
                </form>
            </div>
     </div>
</div> 
@endsection
@include('include.footer')
  