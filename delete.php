<?php

include("conexion.php");
$con = conectar();

$idClientes = $_GET['id'];

$sql = "DELETE FROM clientes WHERE idClientes='$idClientes'";

$query = mysqli_query($con, $sql);

if ($query) {
  Header("Location: clientes.php");
}