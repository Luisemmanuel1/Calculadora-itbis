<?php
$server= "localhost";
$user= "itbi";
$pass= "itbi";
$database= "primo_db";
$tbl= "itbi";

$conexion = mysqli_connect($server, $user,$pass, $database) or die ("No se pudo conectar: ".mysql_error());

?>