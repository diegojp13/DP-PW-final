<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>Clinica Santo Remedio</title>
  </head>
  <body>
    <div class="container">
        <h1>Clinica Santo Remedio</h1>

        <div class="row mt-4">
            <div class="col-12">
                <table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Clave</th>
					      <th scope="col">Valor</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php
					    	include_once '../config/mysqlconnect.php';

							$conn=mysqli_connect(HOST, USER, PASS, BBDD);

							if (mysqli_connect_errno())
							{
								die ('error de conexion ' . mysqli_connect_errno());
							}

							$query = "SELECT resultados.* FROM resultados WHERE resultados.ID = " . $_GET["id"];
							
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($result)) {
								$file= fopen($row["examen"],"r");
								echo fgets($file);
								fclose($file);

								$nombrearchivo="examen".$row["ID"];
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

<?php
	require_once '../dompdf/autoload.inc.php';

	use Dompdf\Dompdf;



	$html = ob_get_clean();

	if(ob_get_length()) {
		ob_end_clean();
	}

	$pdf = new Dompdf();
	$pdf->loadHtml($html);
	$pdf->render();
	$pdf->stream($nombrearchivo.'.pdf');
	file_put_contents("../assets/pdf/".$nombrearchivo.".pdf", $pdf->output());

?>