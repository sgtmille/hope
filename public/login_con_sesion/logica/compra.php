<?php
require 'conexion.php';
session_start();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$id_producto = $_POST['id_producto'];
$tienda = $_POST['tienda'];

$sql = "INSERT INTO compras (nombre, apellido, email, id_producto, dni, tienda) VALUES ('$nombre', '$apellido', '$email', '$id_producto', '$dni', '$tienda')";
if (mysqli_query($conexion, $sql)) {
   header("location: /public/login_con_sesion/paginacompra.php");
} 
else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>