<?php

include("conexion.php");
$con = conectar();

$referenciaProducto = $_GET['id'];

$sql = "DELETE FROM proveedores WHERE nitProve='$nitProve'";

$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: proveedores.php");
}