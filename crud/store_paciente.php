<?php
	include_once '../config/mysqlconnect.php';

	$Nombre = $_POST["nombre"];
	$Cedula = $_POST["cedula"];
	$Edad = $_POST["edad"];
	$Genero = $_POST["genero"];
	$Altura = $_POST["altura"];
	$Peso = $_POST["peso"];
	$TipoDeSangre = $_POST["btype"];
	$Direccion = $_POST["direccion"];
	$EMail = $_POST["email"];
	$NroTelef = $_POST["nrotlf"];
	

	$conn=mysqli_connect(HOST, USER, PASS, BBDD);

	if (mysqli_connect_errno())
	{
		die ('error de conexion ' . mysqli_connect_errno());
	}

	$query = "INSERT INTO paciente (Nombre, cedula, edad, Genero, Altura, Peso, TipoDeSangre, Direccion, email, NroTelef) VALUES ('" . $Nombre . "', '". $Cedula ."', '" . $Edad . "', '". $Genero ."', '". $Altura ."', '". $Peso ."', '". $TipoDeSangre ."', '". $Direccion ."', '" .$EMail ."', '" .$NroTelef ."')";

	mysqli_query($conn, $query);

	mysqli_close($conn);
?>

<script>
	window.location.href = 'pacientes.php';
</script>