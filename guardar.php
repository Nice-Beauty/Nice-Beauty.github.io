<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   <h1>Usted esta registrado!!</h1>

<?php

$conexion = mysqli_connect("localhost", "root", "", "form");
$sqlConsulta = "select * from registro";
$resultado = mysqli_query($conexion, $sqlConsulta);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error()); }

if($_POST){

$n = $_POST['Nombre'];

$a = $_POST['Apellido'];

$e = $_POST['em'];  

$c = $_POST['con'];

$d = $_POST['direc'];

$cc = $_POST['ci'];

mysqli_query($conexion,"INSERT INTO registro(nombre, apellido, email, contrasena, direccion, ciudad) VALUES ('$n', '$a', '$e','$c', '$d', '$cc')") or die(mysqli_error($conexion));

}

?>


</body>
</html>