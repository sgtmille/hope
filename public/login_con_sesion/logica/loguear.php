<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave =  $_POST['clave'];

$q = "SELECT COUNT(*) as contar FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../paginaprincipal.php");

}else{
    echo'<script type="text/javascript">
    alert("usuario incorrecto o no existe");
    window.location.href="/public/views/login.php";
    </script>';
}



?>