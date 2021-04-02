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
        <h1>Clinica</h1>

        <div class="row mt-4">
            <div class="col-12">
                <form method="POST" action="store_historias.php">
                    <div class="form-group">
                      <label for="colesterol">Tipo de examen</label>
                      <select name="examen" id="examen">
                        <?php while($row = mysqli_fetch_assoc($result))
                        {?>
                        <option value="<?php echo $row['id_examen'] ?>"><?php echo $row['nombre_examen'] ?></option>
                      <?php
                         }
                       mysqli_close($conn);
                      ?>
                        
                      </select>
                      <input type="hidden" name="id_paciente" value="<?php echo $_GET['id_paciente'] ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="fecha">Fecha</label>
                      <input type="date" class="form-control" id="fecha" name="fecha" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a class="btn btn-secondary" name="regresar" href="../index.html">Regresar</a>
                  </form>            
              </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>