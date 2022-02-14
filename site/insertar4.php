<?php
require "cn.php";
$conexion =conexion();

if (!empty($_POST)) {
    $nombre = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["message"];




$insertar4 = "INSERT INTO contacto(nombre, email, mensaje) VALUES('$nombre', '$email', '$mensaje')";

$resultado = mysqli_query($conexion, $insertar4);
if($resultado){
    echo "<script>alert('Se ha registrado el mensaje con exito')";
    header('location:contacto.php');
} else {
    echo "<script>alert('Se envio el mensaje')";
}
} else {
    echo "<script>alert('Se envio el mensaje correctamente')";
}
