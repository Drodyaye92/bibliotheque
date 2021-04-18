@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu justify-content-center ">

<h3 class="para">La liste des livres</h3>
         <div class="d-flex">
         <!-- <div class="col-lg-3">
         <img src="assets/images/etudiante bib d.png" alt="" class="">
         </div> -->
        
             <table class=" table m-5">
                   <thead class=" table-dark"> 
                      <tr><th class="mile p-2 m-5 ">Titre</th><th class="mile p-2 m-5">Type</th><th class="mile p-2 m-5">Dateparution</th><th class="mile p-2 m-5">Auteur</th><th class="mile p-2 m-5">Action</th><th class="mile p-2 m-5">Action</th></tr> 
                   </thead>
                   <tbody> 
                   @foreach($livres as $livre)
                        <tr class="table-info m-5">
                            <td class="espace p-2 m-5">{{$livre->titre}}</td>
                            <td class="espace p-2 m-5">{{$livre->type}}</td>
                            <td class="espace p-2 m-5">{{$livre->dateparution}}</td>
                            <td class="espace p-2 m-5">{{$livre->id_auteurl}}</td>
                            <td class="espace p-2 m-5">
           <div id="html">
             <form action="{{route('take')}}" method="get"></form> 
             <button type="button"  data-bs-toggle="modal" data-bs-target="#modal" class="btn btn-primary">Details</button>
             </form>
           </div>
    <!-- modal-->
        <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                   <h4 class="modal-title" id="modal">infos sur le livre </h4>
                  </div> 
                  <form action="{{ route('modified.update')}}" method="post">
                @csrf
                  <div class="modal-body row">
                         <div class="form-group ">
                             <label for="">Id_livre</label>
                                 <input type="text" class="form-control" name="id_livre" value="{{$livre->id_livre}}">
                             <label for="">Titre</label>
                                 <input type="text" class="form-control" name="titre" value="{{$livre->titre}}">
                             <label for="">Type</label>
                                 <input type="text" class="form-control" name="type" value="{{$livre->type}}">
                             <label for="">Dateparution</label>
                                 <input type="text" class="form-control" name="dateparution" value="{{$livre->dateparution}}">
                            <label for="">Id_auteurl</label>
                                 <input type="text" class="form-control "name="id_auteurl" value="{{$livre->id_auteurl}}">
                        </div>
                  </div>
                  <div class="modal-footer">
                       <!-- <input type="hidden" name="id_livre" value="{{$livre->id_livre}}">
                                 <input type="hidden" name="titre" value="{{$livre->titre}}">
                                 <input type="hidden" name="type" value="{{$livre->type}}">
                                 <input type="hidden" name="dateparution" value="{{$livre->dateparution}}">
                                 <input type="hidden" name="id_auteurl" value="{{$livre->id_auteurl}}"> -->
                          <button type="submit" class="btn btn btn-primary"><i class="bi bi-trash-fill"></i>modifier</button>                     
                        </div>
                    </form>
            </div>
        </div>
   
    </div> 
     <!--fin modal -->
</div>
 </td>

        </form>
             <form action="{{route('supprimer')}}" method="post">
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
@include('include.footer') 
@endsection