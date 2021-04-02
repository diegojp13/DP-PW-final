<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>Clinica </title>
  </head>
  <body>
    <div class="container">
        <h1>Clinica </h1>

        <div class="row mt-4">
            <div class="col-12">
                <a class="btn btn-primary" name="crear" href="create_paciente.php">Crear paciente</a>
                <a class="btn btn-secondary" name="regresar" href="../index.html">Regresar</a>
            </div>
        </div>

		
        <div class="row mt-4">
            <div class="col-12">
                <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Cedula</th>
					      <th scope="col">Nombre</th>
					      <th scope="col">Genero</th>
					      <th scope="col">Edad</th>
					      <th scope="col">Email</th>
					      <th scope="col">Numero de telefono</th>
					      <th scope="col">Acciones</th>
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

							$query = "SELECT * FROM paciente";

							$result = mysqli_query($conn, $query);


							while($row = mysqli_fetch_assoc($result)) {
								echo "
									<tr>
										<td>" . $row["cedula"] . "</td>
										<td>" . $row["Nombre"] . "</td>
										<td>" . $row["Genero"] . "</td>
										<td>" . $row["Edad"] . "</td>
										<td>" . $row["email"] . "</td>
										<td>" . $row["NroTelef"] . "</td>
										<td><a href='examen.php?id_paciente=" . $row["ID"] . "'>Asignar Examen</a></td>
									</tr>
								";
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