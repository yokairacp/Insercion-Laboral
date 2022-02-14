<?php
require "cn.php";
$conexion =conexion();

$año_de_graduacion = $_POST["graduacion"];
$institucion_educativa_a_la_que_perteneces = $_POST["institucion"];
$curso = $_POST["curso"];
$matricula = $_POST["matricula"];
$cedula_de_identidad = $_POST["cedula"];
$carrera_tecnica = $_POST["carrera"];
$tecnico_basico = $_POST["tecnico"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
$sexo = $_POST["sexo"];
$direccion = $_POST["direccion"];
$sector = $_POST["sector"];
$seccion = $_POST["seccion"];
$municipio = $_POST["municipio"];
$provincia = $_POST["provincia"];
$pais_de_nacionalidad = $_POST["pais"];
$telefono_residencial = $_POST["telefonor"];
$telefono_movil = $_POST["movil"];
$posee_licencia_de_conducir = $_POST["licencia"];
$posee_vehiculo_propio = $_POST["vehiculo"];
$email = $_POST["email"];
$confirmacion_de_email = $_POST["emailc"];
$elija_una_contraseña = $_POST["contraseña"];
$confirme_contraseña = $_POST["contraseñac"];
$insertar_curriculum = $_POST["curriculum"];


$insertar1 = "INSERT INTO egresado(añograduacion, institucioneducativa, curso, matricula, cedulaidentidad, carreratecnica, tecnicobasico, nombres, apellidos, fechanacimiento, sexo, direccion, sector, seccion, municipio, provincia, paisnacionalidad, telefonoresidencial, telefonomovil, poseelicenciadeconducir, poseevehiculopropio, email, confirmacionemail, elijacontraseña, confirmecontraseña, insertar) VALUES('$año_de_graduacion', '$institucion_educativa_a_la_que_perteneces', '$curso', '$matricula', '$cedula_de_identidad', '$carrera_tecnica', '$tecnico_basico', '$nombres', '$apellidos', '$fecha_de_nacimiento','$sexo', '$direccion', '$sector', '$seccion', '$municipio', '$provincia', '$pais_de_nacionalidad', '$telefono_residencial', '$telefono_movil', '$posee_licencia_de_conducir', '$posee_vehiculo_propio', '$email', '$confirmacion_de_email', '$elija_una_contraseña', '$confirme_contraseña', '$insertar')";

$resultado = mysqli_query($conexion, $insertar1);
if($resultado){
    echo "<script>alert('Se ha registrado el estudiante/egresado con exito')";
    header('location:tablaestudiante.php');
} else {
    echo "<script>alert('El estudiante/egresado no se registro')";
}