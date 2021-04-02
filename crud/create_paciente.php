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
                <form method="POST" action="store_paciente.php">
                    <div class="form-group">
                      <label for="cedula">Cedula</label>
                      <input type="text" class="form-control" id="cedula" name="cedula" required>
                    </div>

                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="peso">Peso</label>
                      <input type="number" class="form-control" min="1" max="500" step="0.01" id="peso" name="peso" required>
                    </div>

                    <div class="form-group">
                      <label for="edad">Edad</label>
                      <input type="number" min="1" max="100" class="form-control" id="edad" name="edad" required>
                    </div>

                    <div class="form-group">
                      <h6>Genero: </h6>

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="genero1" name="genero" value="M" class="custom-control-input" >
                        <label class="custom-control-label" for="genero1">M</label>
                      </div>

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="genero2" name="genero" value="F" class="custom-control-input" required>
                        <label class="custom-control-label" for="genero2">F</label>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="altura">Altura</label>
                      <input type="text" class="form-control" id="altura" name="altura" required>
                    </div>

                    <div class="form-group">
                      <label for="btype">Tipo de sangre</label>
                      <input type="text" class="form-control" id="btype" name="btype" required>
                    </div>

                    <div class="form-group">
                      <label for="email">EMail</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                      <label for="nrotlf">Numero de Telefono</label>
                      <input type="text" class="form-control" id="nrotlf" name="nrotlf" required>
                    </div>

                    <div class="form-group">
                      <label for="direccion">Direccion</label>
                      <textarea class="form-control" id="direccion" name="direccion" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Registrar</button>

                    <a class="btn btn-secondary" name="regresar" href="pacientes.php">Regresar</a>
                    
                  </form>            
              </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>