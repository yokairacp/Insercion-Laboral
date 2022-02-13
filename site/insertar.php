<?php
require "cn.php";
$conexion =conexion();


$nombre_de_la_empresa = $_POST["nempresa"];
$nombre_del_puesto = $_POST["npuesto"];
$funciones_o_perfil_del_puesto = $_POST["funciones"];
$sueldo = $_POST["sueldo"];
$ubicacion = $_POST["ubicacion"];
$tipo_de_contrato = $_POST["optraradio"];
$horario = $_POST["horario"];
$correo_al_que_se_debe_enviar_los_curriculum= $_POST["correocurriculum"];
$persona_de_contacto = $_POST["personacontacto"];
$telefono = $_POST["telefono"];




$insertar = "INSERT INTO vacante(nombreempresa, nombrepuesto, funcionesoperfil, sueldo, ubicacion, tipodecontrato, horario, correocurriculum, personacontacto, telefono) VALUES('$nombre_de_la_empresa', '$nombre_del_puesto', '$funciones_o_perfil_del_puesto', '$sueldo', '$ubicacion', '$tipo_de_contrato', '$horario', '$correo_al_que_se_debe_enviar_los_curriculum', '$persona_de_contacto', '$telefono')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha registrado la vacante con exito')";
    header('location:index.php');
} else {
    echo "<script>alert('La vacante no se registro')";
}