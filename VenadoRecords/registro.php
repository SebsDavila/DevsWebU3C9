<?php
include("php/conexion2.php");

?>

<?php

if (isset($_POST['enviar'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['contraseña'])) {
    mysqli_query($cnx, "INSERT into usuario (nombre,correo,telefono,contraseña) values
      ('$_POST[nombre]',
      '$_POST[correo]',
      '$_POST[telefono]',
      '$_POST[contraseña]')");
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
<script src="sweetalert2.all.min.js"></script>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!DOCTYPE html>
<html>

<head>
  <title>Bienvenido</title>
  <!-- MDB 4.19.0 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

  <!-- JavaScrip -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  <!-- JQuery Validate library -->
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>

  <!-- Bootstrap Validator library -->
  <!--  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script> -->
  <!-- icono de la pagina -->
  <link rel="icon" href="images/API.png">

  <!-- MDB 4.19.0 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

  <!-- JavaScrip -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  <!-- JQuery Validate library -->
  <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Bootstrap Validator library -->
  <!--  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script> -->


</head>

<body>
  <section>
    <style>
      .bg-nav {
        background-color: #6D1E7A;
      }

      .form {}
    </style>
    <link rel="icon" type="image/jpg" href="images/images.jpg">
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-nav">
      <a class="navbar-brand" href="#"><img src="images/deer.jpg" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="sesion.php">
              <i class=""></i> Inicia sesión

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
  <br>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>

      <div class="col-6">
        <div class="card">

          <h5 class="card-header bg-success info-color white-text text-center py-4">
            <strong>Registrar un nuevo perfil</strong>
          </h5>

          <!--Card content-->
          <div class="card-body px-lg-5">

            <!-- Form -->
            <form id="form" method="post" class="form">

              <div class="text-center">
                <p>Únete a nuestra lista de usuarios. Te solcitamos ingreses todos los campos para genarar tu perfil.</p>


              </div>

              <!-- nombre -->
              <label for="nombre" class="grey-text font-weight-light">Digite su nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
              <br>

              <!-- Email -->
              <label for="email" class="grey-text font-weight-light">Digite su correo</label>
              <input type="email" name="correo" id="email" class="form-control">
              <br>

              <!-- Celular -->
              <label for="celular" class="grey-text font-weight-light">Digite su celular</label>
              <input type="text" name="telefono" id="celular" class="form-control">
              <br>

              <!-- Contraseña -->
              <label for="contrasena" class="grey-text font-weight-light">Digite su contraseña</label>
              <input type="password" name="contraseña" id="contrasena" class="form-control">
              <br>

              <!-- Captcha -->
              <div class="mb-3">
                <center>
                  <div class="g-recaptcha" id="captcha" data-sitekey="6LciTD0gAAAAAEqoqULOYACbhHQZ2wSO9mSSywv5"></div>
                </center>
              </div>



              <button class="btn btn-outline-success btn-rounded btn-block z-depth-0 my-4 waves-effect" id="enviar" onclick="datosEnviados()" name="enviar" type="submit">Generar perfil</button>

            </form>
          </div>
        </div>
      </div>

      <div class="col-3">
        <!-- Columna sin mostrar informacion -->
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">

$(document).on('click', '#enviar', function(){
  var judith = grecaptcha.getResponse();
  if(judith.length == 0){
    alert("Por favor verifica que no eres un robot");
    return false;
  }
});

  function datosEnviados() {

    var judith = document.getElementById('nombre').value;
    var judith2 = document.getElementById('email').value;
    var judith3 = document.getElementById('celular').value;
    var judith4 = document.getElementById('contrasena').value;
    var judithReset = document.getElementById('form').value;
    if (judith.length == 0) {
      Swal.fire({
        title: "Venado Systems",
        text: "Complete todos los campos",
        icon: "warning",
        confirmButtonText: "Cerrar",
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydownPropagation: false
      });
    }
    else if(judith2.length == 0){
      Swal.fire({
        title: "Venado Systems",
        text: "Complete todos los campos",
        icon: "warning",
        confirmButtonText: "Cerrar",
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydownPropagation: false
      });
    }

    else if(judith3.length == 0){
      Swal.fire({
        title: "Venado Systems",
        text: "Complete todos los campos",
        icon: "warning",
        confirmButtonText: "Cerrar",
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydownPropagation: false
      });
    }

    else if(judith4.length == 0){
      Swal.fire({
        title: "Venado Systems",
        text: "Complete todos los campos",
        icon: "warning",
        confirmButtonText: "Cerrar",
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        stopKeydownPropagation: false
      });
    }
    else {
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
    judithReset.reset();
  }

  $("#form").validate({

    rules: {

      nombre: {
        required: true,
      },
      correo: {
        required: true,
      },
      telefono: {
        required: true,
        digits: true,
      },
      contraseña: {
        required: true,
        minlength: 8,
      },
      captcha: {
        required: true,
      }

    },
    messages: {

      nombre: {
        required: "<font color=#C0392B> Por favor digite su nombre </font>",
      },
      correo: {
        required: "<font color=#C0392B> Por favor digite un correo Valido </font>",
      },
      telefono: {
        required: "<font color=#C0392B> Por favor digite su número de celular </font>",
        digits: "<font color=#C0392B> El número de celular deben de ser numeros</font>",
      },
      contraseña: {
        required: "<font color=#C0392B> Digite una contraseña </font>",
        minlength: "<font color=#C0392B>Tu contraseña debe tener 8 caracteres como minimo",
      },
      captcha: {
        required: "<font color=#C0392B> Debe verificar que no es un robot </font>",

      }

    }
  });
</script>