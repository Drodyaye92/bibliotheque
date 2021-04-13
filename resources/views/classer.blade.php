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
               <thead></thead>
               <tbody>
               
                <td><button type="submit" class="btn btn-primary">Modifier</button></td>
                            <td><button type="submit" class="btn btn-danger" name="">Supprimer</button></td>
               </tbody>
               </table> 
               

Trigger/Open The Modal
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p></p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

               <!-- <table>
               <thead></thead>
               <tbody></tbody>
               </table> -->
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