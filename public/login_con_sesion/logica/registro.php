<?php
require 'conexion.php';
session_start();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$clave = $_POST['clave'];
$pais = $_POST['pais'];

$sql = "INSERT INTO usuario (nombre, apellido, email, clave, dni, pais) VALUES ('$nombre', '$apellido', '$email', '$clave', '$dni', '$pais')";
if (mysqli_query($conexion, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>