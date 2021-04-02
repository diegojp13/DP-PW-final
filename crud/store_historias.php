<?php
	include_once '../config/mysqlconnect.php';

	$Examen = $_POST["examen"];
	$id_paciente = $_POST["id_paciente"];
	$Fecha = $_POST["fecha"];
	

	$conn=mysqli_connect(HOST, USER, PASS, BBDD);

	if (mysqli_connect_errno())
	{
		die ('error de conexion ' . mysqli_connect_errno());
	}

	$query = "INSERT INTO resultados (id_paciente, fecha, realizado, id_examen) VALUES ('".$id_paciente."','". $Fecha ."', 0 ,'".$Examen."')";

	mysqli_query($conn, $query);

	mysqli_close($conn);
?>

<script>
	window.location.href = 'examen.php?id_paciente=<?php echo $id_paciente ?>';
</script>