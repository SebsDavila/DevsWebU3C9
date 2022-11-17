<?php
include("php/conexion2.php");

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
  <title>Comentarios</title>
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
        <a class="nav-link" href="comentarios.php">
          <i class=""></i> Dejar un comentario
          
          <span class="sr-only">(current)</span>
        </a>
      
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class=""></i> Regresar al inicio
          
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

<div class="container col-sm-4">
  <!-- Default form subscription -->
  
</div>

<br><br>

<div class="container col-sm-8">


<?php
        $sql="SELECT * from comentario";
        $registro=mysqli_query($cnx,$sql);
        while($campo=mysqli_fetch_array($registro))
        {
          ?>

          <div class="media border p-3">
            <img src="images/deer.jpg"  class="mr-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
              <h5><?php echo $campo['usuario'];?></h5>
              <p><?php echo $campo['comentario'];?></p>
            </div>
          </div>

          <?php
        }
        ?>


      </div>
    </div>
</body>
</html>