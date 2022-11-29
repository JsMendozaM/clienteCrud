<?php include("template/cabecera.php"); ?>

<?php include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM productoscliente";
$query = mysqli_query($con, $sql);


?>

<head>
  <style>
  .form-control {
    background-color: #212121;
    padding: 10px;
    border: 2px solid rgb(23, 220, 254);
    border-radius: 5px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    /* box-shadow: 3px 3px 2px rgb(249, 255, 85); */
  }


  .form-control:focus {
    color: rgb(255, 255, 255);
    background-color: #3c0227;
    border: 2px solid rgb(252, 4, 195);
    outline-color: rgb(162, 0, 255);
    box-shadow: -3px -3px 15px rgb(162, 0, 255);
    transition: .1s;
    transition-property: box-shadow;
  }


  .correcto {
    box-shadow: -2px -2px 10px rgb(0, 255, 68);
  }

  .incorrecto {
    border: 4px solid rgb(255, 1, 1);
    box-shadow: 2px 2px 25px #ff0019 inset;

  }
  </style>
</head>

<body>
  <b>
    <div class="container p-4">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card card-body">
            <h4 class="card-title">
              <center>PRODUCTOS</center>
            </h4>
            <form method="post" name="form" id="formulario" onsubmit="return validarform()" action="insertarProd.php">

              <div class="form-group">
                <input type="text" name="referenciaProducto" id="referenciaProducto" class="form-control mb-3"
                  placeholder="Ingresa Referencia" autocomplete="off" autofocus>
                <p id="Ref_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="nombreProducto" id="nombreProducto" class="form-control mb-3"
                  placeholder="Nombre del Producto" autocomplete="off" required>
                <p id="Nom_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="precioProducto" id="precioProducto" class="form-control mb-3"
                  placeholder="Ingresa el Precio" autocomplete="off" required>
                <p id="Precio_Pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="cantidadProducto" id="cantidadProducto" class="form-control mb-3"
                  placeholder="Ingresa la cantidad" autocomplete="off" required>
                <p id="Can_Pro"></p>
              </div>

              <input type="submit" class="btn btn-success btn-block " name="send" value="Agregar">
              <input type="reset" class="btn btn-secondary btn-block m-md-3" value="Limpiar">

            </form>
          </div>
        </div>




        <div class="col-md-8 mx-auto">
          <table class="table table-dark">
            <thead>
              <tr>

                <th>Referencia del producto</th>
                <th>Nombre del producto</th>
                <th>Precio del producto</th>
                <th>Cantidad de producto</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = mysqli_fetch_array($query)) {

              ?>

              <tr>
                <th><?php echo $row['referenciaProducto'] ?></th>
                <th><?php echo $row['nombreProducto'] ?></th>
                <th><?php echo $row['precioProducto'] ?></th>
                <th><?php echo $row['cantidadProducto'] ?></th>

                <th><a href="actualizarProd.php?id=<?php echo $row['referenciaProducto'] ?>"
                    class="btn btn-primary">Actualizar
                  </a></th>
                <th><a href="deleteProd.php?id=<?php echo $row['referenciaProducto'] ?>" class="btn btn-danger">
                    Borrar
                  </a></th>

              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br /> <br /><br /><br /> <br />
    <script src="./js/productos.js"></script>
</body>

<?php include("template/pie.php"); ?>