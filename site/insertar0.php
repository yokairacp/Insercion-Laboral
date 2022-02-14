<?php
require "cn.php";
$conexion =conexion();

if (!empty($_POST)) {
    $usuario = $_POST["correo"];
$contraseña = $_POST["contra"];




$insertar0 = "INSERT INTO login(correo, contraseña) VALUES('$usuario', '$contraseña')";

$resultado = mysqli_query($conexion, $insertar0);
if($resultado){
    echo "<script>alert('Se ha registrado la vacante con exito')";
    header('location:usuarios.php');
} else {
    echo "<script>alert('Iniciaste seccion')";
}
} else {
    echo "<script>alert('No pudiste iniciar secion, intentalo de nuevo')";
}
