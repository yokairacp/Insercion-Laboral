<?php
require "cn.php";
$conexion =conexion();
echo "En el documento";

if(!empty($_POST)){
    echo "No hay campos vacios";
    $nombre_de_la_empresa = $_POST["nempresa"];
$rnc = $_POST["rnc"];
$desea_que_se_conozca_la_identidad_de_su_empresa = $_POST["identidad"];
$dispone_su_empresa_de_un_departamento_de_formacion_dentro_de_la_empresa = $_POST["departamento"];
$alcance_de_la_empresa = $_POST["alcance"];
$actividad_economica_a_la_que_se_dedica_la_empresa = $_POST["actividad"];
$industria = $_POST["industria"];
$tamaño_de_la_empresa = $_POST["tamaño"];
$direccion = $_POST["direccion"];
$sector = $_POST["sector"];
$seccion = $_POST["seccion"];
$municipio = $_POST["municipio"];
$provincia = $_POST["provincia"];
$pais_donde_opera_la_empresa = $_POST["opera"];
$telefono_principal = $_POST["telefonop"];
$telefono_directo = $_POST["telefonod"];
$email = $_POST["email"];
$confirmacion_de_email = $_POST["emailc"];
$elija_una_contraseña = $_POST["contraseña"];
$confirme_contraseña = $_POST["contraseñac"];
$telefono_y_extension_de_la_empresa = $_POST["ext"];
$correo_de_la_empresa = $_POST["correoempresa"];



$insertar2 = "INSERT INTO empresa(nombreempresa, RNC, identidadempresa, departamentoformacion, alcanceempresa, activadadeconomica, industria, tamañoempresa, direccion, sector, seccion, municipio, provincia, paisdondeopera, telefonoprincipal, telefonodirecto, email, confirmacionemail, elijacontraseña, confirmecontraseña, telefonoext, correo) VALUES('$nombre_de_la_empresa', '$rnc', '$desea_que_se_conozca_la_identidad_de_su_empresa', '$dispone_su_empresa_de_un_departamento_de_formacion_dentro_de_la_empresa', '$alcance_de_la_empresa', '$actividad_economica_a_la_que_se_dedica_la_empresa', '$industria', '$tamaño_de_la_empresa', '$direccion', '$sector', '$seccion', '$municipio', '$provincia', '$pais_donde_opera_la_empresa', '$telefono_principal', '$telefono_directo', '$email', '$confirmacion_de_email', '$elija_una_contraseña', '$confirme_contraseña', '$telefono_y_extension_de_la_empresa', '$correo_de_la_empresa')";

$resultado = mysqli_query($conexion, $insertar2);
if($resultado){
    echo "<script>alert('Se ha registrado la empresa con exito')";
    header('location:tablaempresa.php');
} else {
    echo "<script>alert('La empresa no se registro')";
}
}else {
    echo "Vacio";
}

