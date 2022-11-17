<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
?>
<?php

        try {
            if (isset($_POST['correo']) && !empty($_POST['correo'])) {
                $pass = substr(md5(microtime()), 1, 10);
                
                $mail = $_POST['correo'];

                //Conexion con la base
                $conn = new mysqli("127.0.0.1", "root", "", "judith");

                //$conn = new mysqli("localhost", "id18588395_judith01", "?uY]vl\lV4gQ16s)", "id18588395_judith");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "Update usuario Set contraseña='$pass' Where correo='$mail'";

                if ($conn->query($sql) === TRUE) {
                    echo "<center>Contraseña enviada correctamente </center>";
                } else {
                    echo "<center>Error modificando: " . $conn->error;
                }

                $to = $_POST['correo']; //"destinatario@email.com";
                $from = "From: " . "VenadoRecords";
                $subject = "Recordar clave de acceso";
                $message = "El sistema le asigno la siguiente clave: " . $pass;

                mail($to, $subject, $message, $from);
                echo '<center>Correo enviado satisfactoriamente a: ' . $_POST['correo'];
            } else
                echo '<center>Informacion incompleta</center>';
        } catch (Exception $e) {
            echo '<center>Excepción capturada: </center>',  $e->getMessage(), "\n";
        }

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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Recuperar contraseña</title>
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

    .form-register {
        width: 600px;
        height: 230px;
        background: #24303c;
        padding: 30px;
        margin: auto;
        margin-top: 100px;
        border-radius: 4px;
        font-family: 'calibri';
        color: white;
        box-shadow: 7px 13px 37px #000;
    }

    .controls {
        width: 100%;
        background: #24303c;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        border: 1px solid #1f53c5;
        font-family: 'calibri';
        font-size: 18px;
        color: white;
    }

    .form-register h4 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .form-register .botons {
        width: 100%;
        background: #1f53c5;
        border: none;
        padding: 12px;
        color: white;
        margin: 16px 0;
        font-size: 16px;
    }
</style>

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
                        <a class="nav-link" href="sesion.php">
                            <i class=""></i> Regresar

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

        <form action="" method="POST">
            <section class="form-register">
                <h4>Recuperar contraseña</h4>
                <input class="controls" type="text" name="correo" placeholder="Ingrese su correo">
                <button type="submit" class="botons" id="Registrar" value="Registrar">Enviar</button>
            
            </section>
        </form>

        
    </section>
</body>

</html>