<?php

include("conexion.php");
$con = conectar();

$referenciaProducto = $_GET['id'];

$sql = "DELETE FROM productoscliente WHERE referenciaProducto='$referenciaProducto'";

$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: productos.php");
}