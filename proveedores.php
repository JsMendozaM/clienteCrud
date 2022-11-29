<?php include("template/cabecera.php"); ?>

<?php include("conexion.php");
$con = conectar();


?>

<head>
  <style>
  .form-control {
    background-color: #212121;
    /* padding: 10px; */
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
              <center>PROVEEDORES</center>
            </h4>
            <form method="post" name="form" id="formulario" onsubmit="return validarform()" action="insertarProve.php">
              <div class="form-group">
                <input type="text" name="nombreProve" id="nombreProve" class="form-control mb-3"
                  placeholder="Nombre del proveedor" autocomplete="off" autofocus>
                <p id="Nom_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="direccionProve" id="direccionProve" class="form-control mb-3"
                  placeholder="Direccion del proveedor" autocomplete="off" required>
                <p id="Dir_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="telefonoProve" id="telefonoProve" class="form-control mb-3"
                  placeholder="Telefono del proveedor" autocomplete="off" required>
                <p id="Tel_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="nitProve" id="nitProve" class="form-control mb-3"
                  placeholder="Nit del proveedor" autocomplete="off" required>
                <p id="Nit_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="correoProve" id="correoProve" class="form-control mb-3"
                  placeholder="Correo del proveedor" autocomplete="off" required>
                <p id="Corr_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="productoProve" id="productoProve" class="form-control mb-3"
                  placeholder="Productos del proveedor" autocomplete="off" required>
                <p id="Prod_pro"></p>
              </div>

              <div class="form-group">
                <input type="text" name="descripcionProve" id="descripcionProve" class="form-control mb-3"
                  placeholder="Descripcion del proveedor" autocomplete="off" required>
                <p id="Desc_pro"></p>
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

                <th>Nombre </th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Nit</th>
                <th>Correo</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM proveedores";
              $query = mysqli_query($con, $sql);

              while ($row = mysqli_fetch_array($query)) {

              ?>

              <tr>
                <th><?php echo $row['nombreProve'] ?></th>
                <th><?php echo $row['direccionProve'] ?></th>
                <th><?php echo $row['telefonoProve'] ?></th>
                <th><?php echo $row['nitProve'] ?></th>
                <th><?php echo $row['correoProve'] ?></th>
                <th><?php echo $row['productoProve'] ?></th>
                <th><?php echo $row['descripcionProve'] ?></th>

                <th><a href="actualizarProvee.php?id=<?php echo $row['nitProve'] ?>" class="btn btn-primary">Actualizar
                  </a></th>
                <th><a href="deleteProvee.php?id=<?php echo $row['nitProve'] ?>" class="btn btn-danger">
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
    <br>
    <script src="./js/proveedores.js"></script>
</body>

<?php include("template/pie.php"); ?>