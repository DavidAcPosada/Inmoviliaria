<?php 

	$conectar=mysqli_connect('localhost','root','','pruebasesion') or die('Error en la coneccion al servidor');

	$sql="INSERT INTO usuarios VALUES('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."','".$_POST["mensajes"]."')";
	$resultado=mysqli_query($conectar,$sql) or die ('Error en base datos');
		mysqli_close($conectar);

	echo font: 46px;"INGRESO EXITOSO, Le estaremos contantacto:".$_POST["nombre"].' '.$_POST["apellido"].'';
	echo "<br><a href='inicio.html'>Volver</a>";	
?>

