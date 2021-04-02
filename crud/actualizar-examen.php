<?php
	include_once '../config/mysqlconnect.php';

	$id = $_POST["id_resultado"];
	$nombre=$_POST["nombre"];
	$direccion="../assets/examenes/".$nombre."".$id;
	$examen="<tr><td>Albumina</td><td>".$_POST["albumina"]."</td></tr><tr><td>Bilirrubina Total</td><td>".$_POST["Bilirrubinat"]."</td></tr><tr><td>Bilirrubina Directa</td><td>".$_POST["Bilirrubinad"]."</td></tr><tr><td>Alanina aminotransferasa</td><td>".$_POST["alt"]."</td></tr><tr><td>Fosfatasa alcalina</td><td>".$_POST["alp"]."</td></tr><tr><td>Gamma glutamil transpeptidasa</td><td>".$_POST["ggt"]."</td></tr>";

	$archivo = fopen($direccion.'.txt','a');
	fputs($archivo,$examen);
	fclose($archivo);

	$conn=mysqli_connect(HOST, USER, PASS, BBDD);

	if (mysqli_connect_errno())
	{
		die ('error de conexion ' . mysqli_connect_errno());
	}

	//$query = "UPDATE resultados SET examen = '".$direccion.".txt', "realizado = '1'" "WHERE ID =" '".$id."'";
	$query = "UPDATE resultados SET diagnostico = '$direccion.txt', realizado = '1' WHERE ID = '$id'";

	mysqli_query($conn, $query);

	mysqli_close($conn);
?>

<script>
	window.location.href = 'manejo-examenes.php';
</script>