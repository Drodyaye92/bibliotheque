@extends('layout.master')
@include('include.header')
@section('contenu')<div class="contenu ">
<div class="container">
    <div class="row">
         <div class="col-lg-4">
               <h4> Mon profil</h4>
               <img src="assets/images/images.png" alt=" " class="my-3" >
               <p>Nom:</p>
               <p>Prenom</p>
              <button>Modifier</button>
         </div>
         <div class="col-lg-8">
               <h2> Les differents types de documents</h2>
               <table>
               <thead> La liste des livres par pays</thead>
               <tbody>
                    <td><button type="submit" class="btn btn-danger" name="">Supprimer</button></td>
               </tbody>
               </table> 

               <table>
               <thead> La liste des livres par auteurs</thead>
               <tbody>
                   <td><button type="submit" class="btn btn-danger" name="">Supprimer</button></td>
               </tbody>
               </table> 

               <table>
               <thead> La liste des livres par titre</thead>
               <tbody>
                   <td><button type="submit" class="btn btn-danger" name="">Supprimer</button></td>
               </tbody>
               </table> 
            

         </div>
    </div>
</div>
</div>

<!-- <script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "demo_get.asp", true);
  xhttp.send();
}
</script> -->
@endsection