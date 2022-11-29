<?php
include("conexion.php");
$con = conectar();

$idClientes = $_POST['idClientes'];
$nombreCliente = $_POST['nombreCliente'];
$correoCliente = $_POST['correoCliente'];
$direccionCliente = $_POST['direccionCliente'];
$teleCliente = $_POST['teleCliente'];

$sql = "UPDATE clientes SET  nombreCliente='$nombreCliente', correoCliente='$correoCliente', direccionCliente='$direccionCliente', teleCliente='$teleCliente' WHERE idClientes='$idClientes'";

$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: clientes.php");
}