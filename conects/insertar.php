<?php
include("conects/conexion.php");
$con = conectar();

$idClientes = $_POST['idClientes'];
$nombreCliente = $_POST['nombreCliente'];
$correoCliente = $_POST['correoCliente'];
$direccionCliente = $_POST['direccionCliente'];
$teleCliente = $_POST['teleCliente'];

$sql = "INSERT INTO clientes VALUES ('$idClientes','$nombreCliente','$correoCliente','$direccionCliente','$teleCliente')";
$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: clientes.php");
} else {
}