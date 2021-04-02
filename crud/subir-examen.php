<?php
  include_once '../config/mysqlconnect.php';
    $conn=mysqli_connect(HOST, USER, PASS, BBDD);

  if (mysqli_connect_errno())
  {
    die ('error de conexion ' . mysqli_connect_errno());
  }

  $query = "SELECT * FROM examenes";

  $result= mysqli_query($conn, $query);
  ?>
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
        <h1>Clinica </h1>

        <div class="row mt-4">
            <div class="col-12">
                <form method="POST" action="actualizar-examen.php">
                    <div class="form-group">
                      <label for="pts">Proteína total en suero</label>
                      <input type="text" class="form-control" id="pts" name="pts" required>
                      <input type="hidden" name="id_resultado" value="<?php echo $_GET['id'] ?>">
                      <input type="hidden" name="nombre" value="<?php echo $_GET['nombre'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="albumina">Albúmina</label>
                      <input type="text" class="form-control" id="albumina" name="albumina" required>
                    </div>

                    <div class="form-group">
                      <label for="Bilirrubinat">Bilirrubina Total</label>
                      <input type="text" class="form-control" id="Bilirrubinat" name="Bilirrubinat" required>
                    </div>

                    <div class="form-group">
                      <label for="Bilirrubinad">Bilirrubina Directa</label>
                      <input type="text" class="form-control" id="Bilirrubinad" name="Bilirrubinad" required>
                    </div>

                    <div class="form-group">
                      <label for="alt">Alanina aminotransferasa</label>
                      <input type="text" class="form-control" id="alt" name="alt" required>
                    </div>

                    <div class="form-group">
                      <label for="alp">Fosfatasa alcalina</label>
                      <input type="text" class="form-control" id="alp" name="alp" required>
                    </div>

                    <div class="form-group">
                      <label for="ggt">Gamma glutamil transpeptidasa</label>
                      <input type="text" class="form-control" id="ggt" name="ggt" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </form>            
              </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>