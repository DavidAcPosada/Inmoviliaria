<?php
include ("conexion.php");
if(isset($_POST['enviar'])){

	$Nombres=$_POST['Nombres'];
	$Apellidos=$_POST['Apellidos'];
	$Correo=$_POST['Correo'];
	$Mensaje=$_POST['Mensaje'];
}

$insertar="INSERT INTO formulario(Nombres, 	Apellidos,
Correo, Mensaje)VALUES ('$Nombres','$Apellidos','$Correo','$Mensaje')";
$ejecutar=mysqli_query($conexion,
$insertar);
if ($ejecutar) {
echo "transacción exitosa!!";
}

?>