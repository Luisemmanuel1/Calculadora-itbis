<?php
 error_reporting(0);
 include('connect/connexion.php');
	if ($_POST['total_gral'] && $_POST['sub_t'] && $_POST['itbis']){
		// insertar en la tabla un nuevo usuario "metodo mas seguro"
	    $NuevoUser = "INSERT INTO $tbl (total, sub_total, itbi) VALUES ("
	    . "'" . mysqli_real_escape_string($conexion, $_POST['total_gral'])."'," 
	    . "'" . mysqli_real_escape_string($conexion, $_POST['sub_t'])."',"
	    . "'" . mysqli_real_escape_string($conexion, $_POST['itbis'])."')";
	    mysqli_query($conexion, $NuevoUser);
	}
	else {			
	}
    mysqli_close($conexion);
?>