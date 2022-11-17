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

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">



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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<!DOCTYPE html>
<html>

<head>
  <title>Cuenta</title>
</head>

<style>
  .bg-nav {
    background-color: purple;
  }

  div.dataTables_wrapper {
    width: 1000px;
    margin: 0 auto;
    color: white;
  }


  section {
    width: 100%;
    height: 100vh;
    color: #fff;
    background: linear-gradient(135deg, #00B7D4, #505488, #2F3F80, #161569, #5A4894, #A950A1, #FF7CAE);
    background-size: 500%;
    position: relative;
    animation: cambiar 10s ease-in-out infinite;
  }


  @keyframes cambiar {
    0% {
      background-position: 0 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0 50%;
    }
  }

  td {
    color: white;
  }
</style>
<link rel="icon" type="image/jpg" href="images/images.jpg">

<body>

  <section>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-nav">
      <a class="navbar-brand" href="#"><img src="images/deer.jpg" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">
              <i class=""></i> Salir

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

    <br><br>
    <center>
      <h4 class="header-title">USUARIOS REGISTRADOS</h4>
    </center>
    <div class="data-tables datatable-dark">
      <table class="table" id="dtusers">
        <thead>
          <tr class="table-secondary">
            <th>Nombre de usuario</th>
            <th>Correo electronico</th>
            <th>Número de celular</th>
            <th>Contraseña</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT * FROM usuario";
          $query = $cnnPDO->prepare($sql);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);

          if ($query->rowCount() > 0) {
            foreach ($results as $result) {
              echo "
        <tr>
          <td> " . $result->nombre . "</td>
          <td> " . $result->correo . " </td>
          <td> " . $result->telefono . " </td>
          <td> " . $result->contraseña . " </td>
        </tr>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</body>
<script>
  $(document).ready(function() {
    $('#dtusers').DataTable({
      scrollY: '200px',
      scrollCollapse: true,
      paging: false,
    });
  });

  $('#dtusers').hide();

  const getDatos = () => {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve(dtusers);
      }, 3000);
    });
  }

  async function fetchingData() {
    const VAS = await getDatos();
    $('#dtusers').show();
    console.log(VAS);
  }

  fetchingData();
</script>

</html>