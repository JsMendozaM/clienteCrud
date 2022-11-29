<?php include("template/cabecera.php"); ?>
<?php

include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM productoscliente WHERE referenciaProducto='$id'";
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
            <form name="form" class="formulario" action="updateProd.php?id=<?php echo $_GET['id']; ?>"
              onsubmit="return validarform()" method="POST">
              <div class="form-group p-2">
                Referencia: <input type="text" name="referenciaProducto" id="referenciaProducto"
                  value="<?php echo $row['referenciaProducto'] ?>" class="form-control"
                  placeholder="Actualizar referencia" autocomplete="off" autofocus>
                <p id="Ref_pro"></p>
              </div>

              <div class="form-group p-2">
                Nombre:
                <input type="text" name="nombreProducto" id="nombreProducto"
                  value="<?php echo $row['nombreProducto'] ?>" class="form-control" placeholder="Actualizar Nombre"
                  autocomplete="off" required>
                <p id="Nom_pro"></p>
              </div>

              <div class="form-group p-2">
                Precio:
                <input type="text" name="precioProducto" id="precioProducto"
                  value="<?php echo $row['precioProducto'] ?>" class="form-control" placeholder="Actualizar Precio"
                  autocomplete="off" required>
                <p id="Precio_Pro"></p>
              </div>

              <div class="form-group p-2">
                Cantidad:
                <input type="text" name="cantidadProducto" id="cantidadProducto"
                  value="<?php echo $row['cantidadProducto'] ?>" class="form-control" placeholder="Actualizar Cantidad"
                  autocomplete="off" required>
                <p id="Can_Pro"></p>
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
  <br /> <br /><br /><br />
</body>

<script src="./js/productos.js">

</script>

</html>
<?php include("template/pie.php"); ?>