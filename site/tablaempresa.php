<?php
require "cn.php";
$conexion=conexion();
$empresa = "SELECT * FROM empresa";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empresa</title>
    <style>

 body {
    background: #ddd;
    font-family: monospace;
}

.container-table{
    width: 220%;
    background-color: white;
    margin: 50px auto;
    box-shadow: 0 0 20px #1164fd;
    left: auto;
    

    display: grid;
    grid-template-columns: repeat(22, 1fr);
    grid-auto-rows: 70px;
}

.table__title{
    grid-column-start: 1;
    grid-column-end: 23;

    background-color: #df9205;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-size: 1.9em;
    

}

.table__header, .table__item{
    display: flex;
    justify-content: center;
    align-items: center;
}

.table__header{
    font-weight: bold;
    font-size: 15px;
}

.table__item{
    font-size: 15px;
    
    padding: 15px;
}
</style>
</head>
<body>
    <div class="container-table">
      <div class="table__title">Empresa</div>
      <div class="table__header">Nombre Empresa</div>
      <div class="table__header">RNC</div>
      <div class="table__header">Conocer identidad</div>
      <div class="table__header">Formacion</div>
      <div class="table__header">Alcance</div>
      <div class="table__header">Actividad</div>
      <div class="table__header">Industria</div>
      <div class="table__header">Tamaño</div>
      <div class="table__header">Direccion</div>
      <div class="table__header">Sector</div>
      <div class="table__header">Seccion</div>
      <div class="table__header">Municipio</div>
      <div class="table__header">Provincia</div>
      <div class="table__header">Pais opera</div>
      <div class="table__header">Telefono principal</div>
      <div class="table__header">Telefono directo</div>
      <div class="table__header">Email </div>
      <div class="table__header">Confirme email</div>
      <div class="table__header">Elija Contraseña</div>
      <div class="table__header">Confirme contraseña</div>
      <div class="table__header">Telefono y Ext.</div>
      <div class="table__header">Correo de la empresa.</div>
   
    
      <?php
      $resultado = mysqli_query($conexion, $empresa);
      while($row=mysqli_fetch_assoc($resultado)) {
      ?>

      <div class="table__item"><?php echo $row["nombreempresa"] ?></div>
      <div class="table__item"><?php echo $row["RNC"] ?></div>
      <div class="table__item"><?php echo $row["identidadempresa"] ?></div>
      <div class="table__item"><?php echo $row["departamentoformacion"] ?></div>
      <div class="table__item"><?php echo $row["alcanceempresa"] ?></div>
      <div class="table__item"><?php echo $row["activadadeconomica"] ?></div>
      <div class="table__item"><?php echo $row["industria"] ?></div>
      <div class="table__item"><?php echo $row["tamañoempresa"] ?></div>
      <div class="table__item"><?php echo $row["direccion"] ?></div>
      <div class="table__item"><?php echo $row["sector"] ?></div>
      <div class="table__item"><?php echo $row["seccion"] ?></div>
      <div class="table__item"><?php echo $row["municipio"] ?></div>
      <div class="table__item"><?php echo $row["provincia"] ?></div>
      <div class="table__item"><?php echo $row["paisdondeopera"] ?></div>
      <div class="table__item"><?php echo $row["telefonoprincipal"] ?></div>
      <div class="table__item"><?php echo $row["telefonodirecto"] ?></div>
      <div class="table__item"><?php echo $row["email"] ?></div>
      <div class="table__item"><?php echo $row["confirmacionemail"] ?></div>
      <div class="table__item"><?php echo $row["elijacontraseña"] ?></div>
      <div class="table__item"><?php echo $row["confirmecontraseña"] ?></div>
      <div class="table__item"><?php echo $row["telefonoext"] ?></div>
      <div class="table__item"><?php echo $row["correo"] ?></div>
      <?php 
      }
      ?>
    </div>

</body>
</html>