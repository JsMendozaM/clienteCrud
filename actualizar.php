<?php include("template/cabecera.php"); ?>
<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE idClientes='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <title>Actualizar</title>
  <style>
  .card {
    /*  padding: 20px;
    border-radius: 20px; */
    background: #6441A5;
    background: -webkit-linear-gradient(to bottom, #2a0845, #6441A5);
    background: linear-gradient(to bottom, #2a0845, #6441A5);

  }

  .form-control {
    background-color: #212121;
    /* padding: 10px; */
    border: 2px solid rgb(23, 220, 254);
    border-radius: 5px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    /* box-shadow: 3px 3px 2px rgb(249, 255, 85); */
  }

  .correcto {
    box-shadow: -2px -2px 10px rgb(0, 255, 68) inset;
  }

  .incorrecto {
    border: 4px solid rgb(255, 1, 1);
    box-shadow: 2px 2px 25px #ff0019 inset;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card card-body">
            <form method="POST" name="form" class="formulario" action="update.php?id=<?php echo $_GET['id']; ?>"
              onsubmit="return validarform()">

              <div class="form-group p-2">
                ID: <input type="text" id="idClientes" name="idClientes" value="<?php echo $row['idClientes'] ?>"
                  class="form-control" placeholder="Actualizar ID" autocomplete="off" autofocus>
                <p id="Cli"></p>
              </div>

              <div class="form-group p-2">
                Nombre:
                <input type="text" id="nombreCliente" name="nombreCliente" value="<?php echo $row['nombreCliente'] ?>"
                  class="form-control" placeholder="Actualizar Nombre" autocomplete="off" required>
                <p id="NomCli"></p>
              </div>

              <div class="form-group p-2">
                Correo:
                <input type="text" id="correoCliente" name="correoCliente" value="<?php echo $row['correoCliente'] ?>"
                  class="form-control" placeholder="Actualizar Correo" autocomplete="off" required>
                <p id="CorrCli"></p>
              </div>

              <div class="form-group p-2">
                Direccion:
                <input type="text" id="direccionCliente" name="direccionCliente"
                  value="<?php echo $row['direccionCliente'] ?>" class="form-control" placeholder="Actualizar Dirrecion"
                  autocomplete="off" required>
                <p id="DirCli"></p>
              </div>
              <div class="form-group p-2">
                Telefono:
                <input type="text" id="teleCliente" name="teleCliente" value="<?php echo $row['teleCliente'] ?>"
                  class="form-control" placeholder="Actualizar telefono" autocomplete="off" required>
                <p id="TelCli"></p>
              </div>

              <button class="btn btn-success btn-block m-4" value="update">
                Actualizar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/clientes.js"></script>
</body>
<br />

</html>
<?php include("template/pie.php"); ?>