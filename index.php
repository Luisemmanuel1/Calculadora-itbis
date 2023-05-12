<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Calculadora de Itbis</title>
		<link rel="shortcut icon" href="images/icon/cal.ico"/>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="js/operaciones.js"></script>
	</head>
	<body>
		<div id="content_cacl">
			<fieldset id="datos">
				<legend>Calculadora de Itbis</legend>
				<label id="lb1">Cant a calc: </label><input type="txt" id="txt_calc" onkeypress="pressT()"><br>
				<form method="post">
					<div class="cont_res">
						<label id="lb2">Total: </label><input name="sub_t" type="txt" id="total" readonly=""><br>
						<label id="lb3">Itbis: </label><input name="itbis" type="txt" id="itbis" readonly=""><br>
						<label id="lb4">Total Gral: </label><input name="total_gral" type="txt" id="total_g" readonly=""><br>
					</div>
					<input type="button" name="Calcular" value="Calcular" id="cr" onclick="calcularN()">
					<input type="button" name="Borrar" value="Borrar" id="br" onclick="borrarT()">
					<input type="submit" name="enviar" value="Enviar" id="br" class="en">
				</form>
				<?php include('pages/modul/submit_database.php'); ?>
			</fieldset>
		</div>
	</body>
</html>



