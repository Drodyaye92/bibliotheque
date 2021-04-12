@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu ">
<div class=" container-fluid">
         <div class="d-flex">
         <div class="col-lg-5">
         <img src="assets/images/etudiante bib d.png" alt="" class="">
         </div>
         <div class="col-lg-7 d-flex justify-content-center">
         <div class="row">
        <div class="col-lg-12"> 
        <h3 class="para ">La liste des livres</h3>
        </div>
        <div class="">

             <table id='tab' class='display'>
                   <thead class="midd w-100 table-dark mt-5"> 
                      <tr><th class="middle ">titre</th><th class="middle mt-4">type</th><th class="middle m-2">dateparution</th><th class="middle m-2">id_auteurl</th></tr> 
                   </thead>
                   <tbody> 
                   @foreach($livres as $livre)
                        <tr class="col-12 table-light mt-3">
                            <td>{{$livre->titre}}</td>
                            <td>{{$livre->type}}</td>
                            <td>{{$livre->dateparution}}</td>
                            <td>{{$livre->id_auteurl}}</td>
                        </tr>
                    @endforeach
                      <!-- <tr class="col-12 table-light mt-3"><td scope="col-lg-3">Roquefort</td><td scope="col-lg-3">brebis</td><td scope="col-lg-3">4</td><th scope="col-lg-3">dateparution</th></tr>
                      <tr class="col-12 table-success mt-5"><td>Morbier</td><td>vache</td><td>1</td><th>dateparution</th></tr>
                      <tr class="col-12 table-warning"><td>Raclette</td><td>vache</td><td>3</td><th>dateparution</th></tr>
                      <tr class="col-12 table-primary"><td>St Nectaire</td><td>vache</td><td>2</td><th>dateparution</th></tr> 
                   </tbody>  -->
             </table>
    
         </div>
         </div>
         </div>
         </div>
</div>
</div>
@endsection