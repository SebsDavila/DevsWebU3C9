<?php
ob_start() ;
?>
<?php 
session_start();
include("php/conexion1.php");

$usuario = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
$_SESSION['nombre']=$usuario;

$sentencia = $cnnPDO->prepare('select * from usuario where 
	contraseña = ? and nombre = ?;');
$sentencia->execute([$contraseña,$usuario]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);

if($usuario == "1109" AND $contraseña == "123"){

	header('Location: admin.php');

}
elseif ($datos === FALSE) {

	$message = "Error! Verifica  tu  Usuario o Contraseña";
	echo "<script type='text/javascript' >alert('$message');
	window.location.href = 'sesion.php';
	</script>";

}

elseif($sentencia->rowCount() == 1){
	$_SESSION['nombre'] = $datos->nombre;
	$_SESSION['contraseña'] = $datos->contraseña;

	header('Location: perfil.php');
}

?>
<?php
ob_end_flush();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/vendo.png" />
	<title>ERROR</title>

</head>
<body>

</body>
</html>