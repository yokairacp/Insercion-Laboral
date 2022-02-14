<?php
require "cn.php";
$conexion=conexion();
$vacante = "SELECT * FROM vacante";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vacante</title>
    <style>
 body {
    background: #ddd;
    font-family: monospace;
}

.container-table{
    width: 90%;
    background-color: white;
    margin: 50px auto;
    box-shadow: 0 0 20px #1164fd;

    display: grid;
    grid-template-columns: repeat(10, 1fr);
    grid-auto-rows: 70px;
}

.table__title{
    grid-column-start: 1;
    grid-column-end: 11;

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
    font-size: 1.2em;
    
    padding: 15px;
}
</style>
</head>
<body>
    <div class="container-table">
      <div class="table__title">Vacantes</div>
      <div class="table__header">Nombre de la empresa</div>
      <div class="table__header">Nombre del Puesto</div>
      <div class="table__header">Funciones del puesto</div>
      <div class="table__header">Sueldo</div>
      <div class="table__header">Ubicación</div>
      <div class="table__header">Tipo de contrato</div>
      <div class="table__header">Horario</div>
      <div class="table__header">Correo de curriculum</div>
      <div class="table__header">Persona de contacto</div>
      <div class="table__header">Teléfono</div>
      <?php
      $resultado = mysqli_query($conexion, $vacante);
      while($row=mysqli_fetch_assoc($resultado)) {
      ?>
      <div class="table__item"><?php echo $row["nombreempresa"] ?></div>
      <div class="table__item"><?php echo $row["nombrepuesto"] ?></div>
      <div class="table__item"><?php echo $row["funcionesoperfil"] ?></div>
      <div class="table__item"><?php echo $row["sueldo"] ?></div>
      <div class="table__item"><?php echo $row["ubicacion"] ?></div>
      <div class="table__item"><?php echo $row["tipodecontrato"] ?></div>
      <div class="table__item"><?php echo $row["horario"] ?></div>
      <div class="table__item"><?php echo $row["correocurriculum"] ?></div>
      <div class="table__item"><?php echo $row["personacontacto"] ?></div>
      <div class="table__item"><?php echo $row["telefono"] ?></div>
      <?php 
      }
      ?>
    </div>

</body>
</html>