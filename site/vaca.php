<?php
require "coneVacante.php";
require "vacante.html";
$conexion =conexion();

$Nombre_de_la_empresa = $_POST["Nombre_de_la_empresa"];
$Nombre_del_puesto = $_POST["Nombre_del_puesto"];
$Funciones_o_perfil_del_puesto = $_POST["Funciones_o_perfil_del_puesto"];
$Sueldo = $_POST["Sueldo"];
$Ubicacion = $_POST["Ubicacion"];
$Tipo_de_contrato = $_POST["Tipo_de_contrato"];
$Horario = $_POST["Horario"];
$Correo_al_que_se_debe_enviar_el_curriculum = $_POST["Correo_al_que_se_debe_enviar_el_curriculum"];
$Persona_de_contacto = $_POST["razon_social"];
$Telefono = $_POST["Telefono"];


$insertar = "INSERT INTO vacante(Nombre de la empresa, Nombre del puesto, Funciones o perfil del puesto, Sueldo, Ubicacion, Tipo de contrato, Horario, Correo al que se debe enviar el curriculum, Persona de contacto, Telefono) VALUES ('$Nombre_de_la_empresa', '$Nombre_del_puesto', '$Funciones_o_perfil_del_puesto', '$Sueldo', '$Ubicacion', '$Tipo_de_contrato', '$Horario', '$Correo_al_que_se_debe_enviar_el_curriculum', '$Persona_de_contacto', '$Telefono')";
$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha registrado la vacante con exito')";
    header('location:vacante.html');
} else {
    echo "<script>alert('La vacante no se registro')";
}
?>