<?php
include("php/conexion2.php");

?>

<?php

if (isset($_POST['registrar'])) 
{
  if (!empty($_POST['correo']) && !empty($_POST['usuario']) && !empty($_POST['mensaje']))
  {
    mysqli_query($cnx,"INSERT into contacto (correo,usuario,mensaje) values
      ( '$_POST[correo]',
      '$_POST[usuario]',
      '$_POST[mensaje]')");
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
  <form id="borrar" class="login" method="post">

   
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Ponte en contacto con nosotros personalmente</h4>
        <br><br>

        
          
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate" id="correo" name="correo">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Correo</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="text" id="defaultForm-email" class="form-control validate" name="usuario">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Usuario</label>
        </div>

        <div class="md-form">
          <i class="fas fa-envelope prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4" name="mensaje"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Mensaje</label>
        </div>
        <center><h6></h6></center>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button  type="submit" class="btn btn-secondary" onclick="datosEnviados()" name="registrar">Enviar</button>
      </div>
    </div>
  </div>
</div>

<br><br>

<div class="container col-sm-8">
  </form>
  <!-- Default form subscription -->


      </div>
    </div>


</body>
</html>
<script>

function datosEnviados() {
            Swal.fire({
                title: "Venado Systems",
                text: "Registro enviado correctamente",
                icon: "success",
                confirmButtonText: "Cerrar",
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                stopKeydownPropagation: false
            });
        }

const form = document.getElementById("borrar");
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            var correo = document.getElementById('correo').value;
            if (correo.length == 0) {
                Swal.fire({
                    title: "LCO Systems",
                    text: "Escriba el correo por favor",
                    icon: "error",
                    confirmButtonText: "Cerrar",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    stopKeydownPropagation: false
                })
                return;
            }

            form.reset();
        })
</script>