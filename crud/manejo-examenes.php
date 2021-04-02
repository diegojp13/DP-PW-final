<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>Clinica</title>
  </head>
  <body>
    <div class="container">
        <h1>Clinica</h1>

        <div class="row mt-4">
            <div class="col-12">
				<a class="btn btn-secondary" name="regresar" href="../index.html">Regresar</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Paciente</th>
					      <th scope="col">Fecha</th>
					      <th scope="col">examen</th>
					      <th scope="col">Examen listo</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php
					    	include '../config/mysqlconnect.php';

							$conn=mysqli_connect(HOST, USER, PASS, BBDD);

							if (mysqli_connect_errno())
							{
								die ('error de conexion ' . mysqli_connect_errno());
							}

							$query = "SELECT
										r.*,
										p.Nombre,
										e.nombre_examen
									FROM resultados r, paciente p, examenes e
									WHERE
										r.id_paciente = p.ID
									AND
										r.id_examen = e.id_examen";

							$result = mysqli_query($conn, $query);

							while($row = mysqli_fetch_assoc($result)) {

								echo "
									<tr>
										<td>" . $row["Nombre"] . "</td>
										<td>" . $row["fecha"] . "</td>
										<td>" . $row["nombre_examen"]."</td>
								";
								?><td>
									<?php if($row["realizado"]==0)
									{
									?>
									<a href="subir-examen.php?id=<?php echo $row['ID']?>&nombre=<?php echo $row['Nombre']?> " class="btn btn-dark">Subir Datos de examen</a><?php
									}
									if($row["realizado"]>0)
									{
									?>
									<a href="reporte.php?id=<?php echo $row['ID']?>&nombre=<?php echo $row['Nombre']?>" class="btn btn-dark">enviar examen</a>
									<?php
									}
									?>
									</td>
									<?php
							}

							mysqli_close($conn);
					    ?>
					  </tbody>
					</table>
            </div>
        </div>

    </div>
    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>