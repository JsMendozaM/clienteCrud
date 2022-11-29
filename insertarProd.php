<?php
include("conexion.php");
$con = conectar();

$referenciaProducto = $_POST['referenciaProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$cantidadProducto = $_POST['cantidadProducto'];


$sql = "INSERT INTO `productoscliente` (`referenciaProducto`, `nombreProducto`, `precioProducto`, `cantidadProducto`) VALUES ('$referenciaProducto', '$nombreProducto', '$precioProducto', '$cantidadProducto')";

/* INSERT INTO `productoscliente` (`referenciaProducto`, `nombreProducto`, `precioProducto`, `cantidadProducto`) VALUES ('13213', 'Depiladora', '40000', '4'); */
$query = mysqli_query($con, $sql);

if ($query) {
  Header('Location: productos.php');
} else {
}