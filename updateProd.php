<?php
include("conexion.php");
$con = conectar();

$referenciaProducto = $_POST['referenciaProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$cantidadProducto = $_POST['cantidadProducto'];


$sql = "UPDATE productoscliente SET  nombreProducto='$nombreProducto', precioProducto='$precioProducto', cantidadProducto='$cantidadProducto' WHERE referenciaProducto='$referenciaProducto'";

$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: productos.php");
}