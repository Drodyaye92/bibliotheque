@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu justify-content-center ">

<h3 class="para m-5">La liste des livres</h3>
         <div class="d-flex">
         <!-- <div class="col-lg-3">
         <img src="assets/images/etudiante bib d.png" alt="" class="">
         </div> -->
        
             <table class="m-5">
                   <thead class=" table-dark"> 
                      <tr><th class="mile p-2 m-5 ">titre</th><th class="mile p-2 m-5">type</th><th class="mile p-2 m-5">dateparution</th><th class="mile p-2 m-5">id_auteurl</th><th class="mile p-2 m-5">action</th><th class="mile p-2 m-5">action</th></tr> 
                   </thead>
                   <tbody> 
                   @foreach($livres as $livre)
                        <tr class="table-light m-5">
                            <td class="espace p-2 m-5">{{$livre->titre}}</td>
                            <td class="espace p-2 m-5">{{$livre->type}}</td>
                            <td class="espace p-2 m-5">{{$livre->dateparution}}</td>
                            <td class="espace p-2 m-5">{{$livre->id_auteurl}}</td>
                            <td class="espace p-2 m-5"><button type="submit" class="btn btn-primary">Modifier</button></td>
                            <form action="{{ route('livre.supprime') }}" method="post">
                                @csrf
                                <td>
                                    <input type="hidden" name="titre" value="{{$livre->id_livre}}">
                                    <button type="submit" class="btn btn btn-danger" onclick="return confirm('Voulez vous vraiment supprimer?')"><i class="bi bi-trash-fill"></i>Supprimer</button>
                                </td>

                            </form>
                        </tr>
                    @endforeach
                
</table>
    
         </div>
        
</div>

@endsection