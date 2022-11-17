


<?php
include("php/conexion1.php");
?>
<?php
if (isset($_POST['enviar'])) {
  if (
    !empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) &&
    !empty($_POST['contraseña'])
  ) {
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitterbootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<!-- JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitterbootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
<!DOCTYPE html>
<html>

<head>
  <title>Iniciar sesión</title>
</head>
<style>
  .bg-nav {
    background-color: #6D1E7A;
  }
</style>
<link rel="icon" type="image/jpg" href="images/images.jpg">

<body>
  <section>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-nav">
      <a class="navbar-brand"><img src="images/deer.jpg" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="registro.php">
              
              <i class=""></i> Registrate gratis!
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
    <form id="formajax" method="POST" action="loginProceso.php">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Ingresa tus datos</h4>
            <br><br>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5" onmouseover="this.style.backgroundColor = 'grey'"
            onmouseout="this.style.backgroundColor = 'white'">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="text" id="defaultForm-email" class="form-control validate" id="nombre" name="nombre">
              <label data-error="wrong" data-success="right" for="defaultForm-email">Usuario</label>
            </div>
            
            <div class="md-form mb-5" onmouseover="this.style.backgroundColor = 'grey'"
            onmouseout="this.style.backgroundColor = 'white'">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="password" id="defaultForm-email" class="form-control validate" id="contraseña" name="contraseña">
              <label data-error="wrong" data-success="right" for="defaultFormemail">Contraseña</label>
            </div>
            <center>
              <h6><a href="recuperarContraseña.php">Recuperar contraseña</a></h6>
            </center>
          </div>
          <div class="modal-footer d-flex justify-content-center" onmouseover="this.style.backgroundColor = 'red'"
            onmouseout="this.style.backgroundColor = 'white'">
            <button type="submit" class="btn btn-secondary" name="enviar">Enviar</button>
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