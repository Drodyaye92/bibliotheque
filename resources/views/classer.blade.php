@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu ">
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
                <h3 class="secte1">Le stock de livre selon leur auteurs</h3>
                <h3 class="secte2">Le stock de livre selon leur type</h3>
                <h3 class="secte3">Le stock de livre selon le titre du livre</h3>
                <h3 class="secte4">Le stock de livre selon la date de parution </h3>
                <table class="table">
   
            <tr>
                <td colspan="3"><strong> Date de parution<strong></td>
            </tr>
        
            <tr>
               <td colspan="3"><strong>{{$livres->$livre}}</strong></td>
            </tr>
       
   
                 </table>
            </section>  
         </div>
    </div>
</div>
</div>


@endsection