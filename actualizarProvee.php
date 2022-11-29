<?php include("template/cabecera.php"); ?>
<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM proveedores WHERE nitProve='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
  <title>Actualizar</title>
  <style>
  .card {
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
            <form name="form" class="formulario" action="updateProvee.php?id=<?php echo $_GET['id']; ?>"
              onsubmit="return validarform()" method="POST">

              <div class="form-group p-2">
                Nombre:
                <input type="text" name="nombreProve" id="nombreProve" value="<?php echo $row['nombreProve'] ?>"
                  class="form-control" placeholder="Actualizar Nombre" autocomplete="off" autofocus>
                <p id="Nom_pro"></p>
              </div>

              <div class="form-group p-2">
                Direccion:
                <input type="text" name="direccionProve" id="direccionProve"
                  value="<?php echo $row['direccionProve'] ?>" class="form-control" placeholder="Actualizar Direccion"
                  autocomplete="off" required>
                <p id="Dir_pro"></p>
              </div>

              <div class="form-group p-2">
                Telefono:
                <input type="text" name="telefonoProve" id="telefonoProve" value="<?php echo $row['telefonoProve'] ?>"
                  class="form-control" placeholder="Actualizar Telefono" autocomplete="off" required>
                <p id="Tel_pro"></p>
              </div>
              <div class="form-group p-2">
                Nit:
                <input type="text" name="nitProve" id="nitProve" value="<?php echo $row['nitProve'] ?>"
                  class="form-control" placeholder="Actualizar Nit" autocomplete="off" required>
                <p id="Nit_pro"></p>
              </div>

              <div class="form-group p-2">
                Correo:
                <input type="text" name="correoProve" id="correoProve" value="<?php echo $row['correoProve'] ?>"
                  class="form-control" placeholder="Actualizar Correo" autocomplete="off" required>
                <p id="Corr_pro"></p>
              </div>

              <div class="form-group p-2">
                Productos:
                <input type="text" name="productoProve" id="productoProve" value="<?php echo $row['productoProve'] ?>"
                  class="form-control" placeholder="Actualizar Productos" autocomplete="off" required>
                <p id="Prod_pro"></p>
              </div>

              <div class="form-group p-2">
                Descripcion:
                <input type="text" name="descripcionProve" id="descripcionProve"
                  value="<?php echo $row['descripcionProve'] ?>" class="form-control"
                  placeholder="Actualizar Descripcion" autocomplete="off" required>
                <p id="Desc_pro"></p>
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
</body>

<script src="./js/proveedores.js"> </script>

</html>
<?php include("template/pie.php"); ?>