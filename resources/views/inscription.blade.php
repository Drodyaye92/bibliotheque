<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css"> 
    <title> Page de connexion</title>
    <link  rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
</head>
<body class="corpus">
   <div class="container">
   <div class="row justify-content-center">
   <div class="img"> <img src="assets/images/bibliologo.PNG" class="rounded" alt=""></div>
   <div class="input w-25 ">
   <form action="{{ route('inscrit.store')}}" method="POST">
   @csrf
   <input type="text" class="form-control m-3" name="nom" placeholder="nom">
   <input type="text" class="form-control m-3" name="prenom" placeholder="Prenom">
   <input type="text" class="form-control m-3" name="email" placeholder="email">
   <input type="password" class="form-control m-3" name="password" placeholder="password">
   <button type="submit" class="btn btn-primary">Inscription
   </button>
   <div class="para"><p>Avez vous un compte?<span class="red"><a href="{{ route ('connexion')}}">Connexion</a></span></p></div>
   </form>
   </div>
   </div>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>