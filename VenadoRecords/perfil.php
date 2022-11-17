<?php
//seguridad de sesiones paginación
session_start();
error_reporting(0);
$varsession= $_SESSION['nombre'];
if($varsession == null || $varsession == ''){
  header("location:sesion.php");
  die();
}

?>

<?php
include("php/conexion1.php");

?>

<?php

if (isset($_POST['registrar'])) 
{
  if (!empty($_POST['usuario']) && !empty($_POST['comentario']))
  {
    mysqli_query($cnx,"INSERT into comentario (usuario,comentario) values
      ( '$_POST[usuario]',
      '$_POST[comentario]')");
  }
}
?>

<!-- CSS -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

  <!-- JavaScript -->

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>



<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
</head>

<style> .bg-nav{                             
background-color: #6D1E7A;
}
 </style>
<link rel="icon" type="image/jpg" href="images/images.jpg">
<body>
<section>
  <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-nav">
    <a class="navbar-brand" href="#"><img src="images/deer.jpg"width= "50"height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">

    <li class="nav-item active">
        <a class="nav-link" href="inf.php">
          <i class=""></i> Ver usuarios registrados
          
          <span class="sr-only">(current)</span>
        </a>
      
      </li>

    <li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class=""></i> Cerrar sesión
          
          <span class="sr-only">(current)</span>
        </a>
      
      </li>


    </ul>
  </div>
    </div>
  </li>
</ul>
</div>
</nav>
</section>
<div class="container">
<div class="row">


  <div class="col-4">
  <div class="card">
  <center><video width="320" height="240" controls>
    <source src="videos/trailer1.mp4" type="video/mp4">
    </video>
  <div class="card-body">
    <h5 class="card-title">Spiderman No way home</h5>
    <p class="card-text">Mira la tercer pelicula del hombre araña, esta vez desatando el multiverso</p>
    <a href="" class="btn btn-primary">Ver película</a>
  </div></center>
</div>
  </div>
  
  
  
    <div class="col-4">
    <div class="card">
  <center><video width="320" height="240" controls>
    <source src="videos/trailer2.mp4" type="video/mp4">
    </video>
  <div class="card-body">
    <h5 class="card-title">Iron Man</h5>
    <p class="card-text">La primera que comenzó todo, ahora Iron man 1 en IMAX</p>
    <a href="" class="btn btn-primary">Ver película</a>
  </div></center>
</div>
    </div>
  
  
  
    <div class="col-4">
    <div class="card">
  <center><video width="320" height="240" controls>
    <source src="videos/trailer3.mp4" type="video/mp4">
    </video>
  <div class="card-body">
    <h5 class="card-title">Aquaman</h5>
    <p class="card-text">Una de las peliculas más taquilleras de DC, ahora con nosotros, disfruta de Aquaman</p>
    <a href="" class="btn btn-primary">Ver película</a>
  </div></center>
</div>
    </div>
</div>

<br><br>

<div class="row">
  <div class="col-sm-4">
  <div class="card">
  <center><video width="320" height="240" controls>
    <source src="videos/trailer4.mp4" type="video/mp4">
    </video>
  <div class="card-body">
    <h5 class="card-title">Hasta el ultimo hombre</h5>
    <p class="card-text">Una de las mejores peliculas jamás sacadas de la historia, sigue la historia de un soldado que se sale de lo convencional que es la guerra</p>
    <a href="" class="btn btn-primary">Ver película</a>
  </div></center>
</div>
  </div>
  
  
   
    <div class="col-sm-4">
    <div class="card">
  <center><video width="320" height="240" controls>
    <source src="videos/trailer5.mp4" type="video/mp4">
    </video>
  <div class="card-body">
    <h5 class="card-title">Forest Gump</h5>
    <p class="card-text">Nominada a los oscares como mejor pelicula, un reparto increíble y llena de emociones, Forest Gump llega con nosotros!</p>
    <a href="" class="btn btn-primary">Ver película</a>
  </div></center>
</div>
    </div>
  
  
  
    <div class="col-sm-4">
    <div class="card">
  <center><video width="320" height="240" controls>
    <source src="videos/trailer6.mp4" type="video/mp4">
    </video>
  <div class="card-body">
    <h5 class="card-title">El padrino</h5>
    <p class="card-text">Un clásico entre los clasicos, el padrino llega a nuestras pantallas con su increíble SoundTrack y una historía imperdible</p>
    <a href="" class="btn btn-primary">Ver película</a>
  </div></center>
</div>
    </div>
</div>
<br>

</div>


</body>
</html>

<?php 
session_destroy()
?>