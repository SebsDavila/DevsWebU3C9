<?php

$cnx = mysqli_connect("localhost","root","","judith") or die("Error De Conexion");


//CONEXION REMOTA
//$cnx =mysqli_connect("localhost","id13771801_sebastian","+L)~|0)Z]e?[!2>l","id13771801_db_web") or die("La BD No Existe");


$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['teleono'];
$contraseña=$_POST['contraseña'];

$sql = "INSERT into usuario
(nombre, correo, telefono, contraseña) values ('$nombre','$correo','$telefono','$cntraseña')";
echo mysqli_query($cnx,$sql);

?>