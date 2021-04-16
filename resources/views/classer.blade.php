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
               
                <h3 class="secte4">Le stock de livre selon la date de parution </h3>
                <table class="table">
   
            <thead>
            <tr>
                <th class="mile p-2 m-5">Dateparution</th><th class="mile p-2 m-5">titre</th>
            </tr> 
                      
            </thead>
        
            <tbody> 
                   @foreach($livres as $livre)
                        @foreach($livre as $livr)
                        <tr class="table-info m-5">
                            
                            <td class="espace p-2 m-5">{{$livr['dateparution']}}</td>
                            <td class="espace p-2 m-5">{{$livr['titre']}}</td>
                           
                        </tr>
                        @endforeach
                     @endforeach  
            </tbody>
   
                 </table>
            </section>  
         </div>
    </div>
</div>
</div>

@include('include.footer') 
@endsection