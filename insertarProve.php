<?php
include("conexion.php");
$con = conectar();

$nombreProve = $_POST['nombreProve'];
$direccionProve = $_POST['direccionProve'];
$telefonoProve = $_POST['telefonoProve'];
$nitProve = $_POST['nitProve'];
$correoProve = $_POST['correoProve'];
$productoProve = $_POST['productoProve'];
$descripcionProve = $_POST['descripcionProve'];


$sql = "INSERT INTO `proveedores` (`nombreProve`, `direccionProve`, `telefonoProve`, `nitProve`, `correoProve`, `productoProve`, `descripcionProve`) VALUES ('$nombreProve', '$direccionProve', '$telefonoProve', '$nitProve', '$correoProve', '$productoProve', '$descripcionProve')";

/* INSERT INTO `productoscliente` (`referenciaProducto`, `nombreProducto`, `precioProducto`, `cantidadProducto`) VALUES ('13213', 'Depiladora', '40000', '4'); */
$query = mysqli_query($con, $sql);

if ($query) {
  Header('Location: proveedores.php');
} else {
}