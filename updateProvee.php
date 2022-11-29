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


$sql = "UPDATE proveedores SET  nombreProve='$nombreProve', direccionProve='$direccionProve',  telefonoProve='$telefonoProve', correoProve='$correoProve', productoProve='$productoProve', descripcionProve='$descripcionProve' WHERE nitProve='$nitProve'";

$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: proveedores.php");
}