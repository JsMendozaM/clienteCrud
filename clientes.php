<?php include("template/cabecera.php"); ?>

<?php include("conexion.php");
$con = conectar();

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
              <center>CLIENTES</center>
            </h4>
            <form method="post" name="form" id="formulario" onsubmit="return validarform()" action="insertar.php">

              <div class="form-group">
                <input type="text" name="idClientes" class="form-control mb-3" id="idClientes" placeholder="Ingresa ID"
                  autocomplete="off" autofocus>
                <p id="Cli"></p>
              </div>
              <div class="form-group">
                <input type="text" name="nombreCliente" class="form-control mb-3" id="nombreCliente"
                  placeholder="Ingresa nombre" autocomplete="off" required>
                <p id="NomCli"></p>
              </div>
              <div class="form-group">
                <input type="text" name="correoCliente" class="form-control mb-3" id="correoCliente"
                  placeholder="Ingresa email" autocomplete="off" required>
                <p id="CorrCli"></p>
              </div>
              <div class="form-group">
                <input type="text" name="direccionCliente" class="form-control mb-3" id="direccionCliente"
                  placeholder="Ingresa direccion" autocomplete="off" required>
                <p id="DirCli"></p>
              </div>

              <div class="form-group">
                <input type="text" name="teleCliente" class="form-control mb-3" id="teleCliente"
                  placeholder="Ingresa telefono" autocomplete="off" required>
                <p id="TelCli"></p>
              </div>
              <br />
              <input type="submit" class="btn btn-success btn-block " name="send" value="Agregar">
              <input type="reset" class="btn btn-secondary btn-block m-md-3" value="Limpiar">

            </form>
          </div>
        </div>




        <div class="col-md-8 mx-auto">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM clientes";
              $query = mysqli_query($con, $sql);

              while ($row = mysqli_fetch_array($query)) {  ?>

              <tr>
                <th><?php echo $row['idClientes']; ?></th>
                <th><?php echo $row['nombreCliente']; ?></th>
                <th><?php echo $row['correoCliente']; ?></th>
                <th><?php echo $row['direccionCliente']; ?></th>
                <th><?php echo $row['teleCliente']; ?></th>

                <th><a href="actualizar.php?id=<?php echo $row['idClientes'] ?>" class="btn btn-primary">Actualizar
                  </a></th>
                <th><a href="delete.php?id=<?php echo $row['idClientes'] ?>" class="btn btn-danger">
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

    <script src="./js/clientes.js"></script>
    <br><br><br>
</body>

<?php include("template/pie.php"); ?>