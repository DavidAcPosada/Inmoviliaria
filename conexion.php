<?php



$user="root";
$password="";
$server="localhost";
$db="inmobiliariacjjh";

$conexion=mysqli_connect($server,$user,$password,$db);
if (!$conexion) {

  die ("error:".mysql_error($conexion));


}



