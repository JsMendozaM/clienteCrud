<?php include("template/cabecera.php"); ?>

<?php include("conects/conexion.php");
$con = conectar();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form method="post" name="form" onsubmit="return validarform()" action="conects/insertar.php">
          <div class="form-group">
            <input type="text" name="idClientes" class="form-control mb-3" placeholder="Ingresa ID" autocomplete="off"
              autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="nombreCliente" class="form-control mb-3" placeholder="Ingresa nombre"
              autocomplete="off" required>
          </div>
          <div class="form-group">
            <input type="text" name="correoCliente" class="form-control mb-3" placeholder="Ingresa email"
              autocomplete="off" required>
          </div>
          <div class="form-group">
            <input type="text" name="direccionCliente" class="form-control mb-3" placeholder="Ingresa direccion"
              autocomplete="off" required>
          </div>

          <div class="form-group">
            <input type="text" name="teleCliente" class="form-control mb-3" placeholder="Ingresa telefono"
              autocomplete="off" required>
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
          while ($row = mysqli_fetch_array($query)) {

          ?>

          <tr>
            <th><?php echo $row['idClientes'] ?></th>
            <th><?php echo $row['nombreCliente'] ?></th>
            <th><?php echo $row['correoCliente'] ?></th>
            <th><?php echo $row['direccionCliente'] ?></th>
            <th><?php echo $row['teleCliente'] ?></th>
            <th><a href="./conects/actualizar.php?id=<?php echo $row['idClientes'] ?>" class="btn btn-secondary">
                <i class="fa fa-edit"></i>
              </a></th>
            <th><a href="./conects/delete.php?id=<?php echo $row['idClientes'] ?>" class="btn btn-danger">
                <i class="fa fa-trash"></i>
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
<?php include("template/pie.php"); ?>