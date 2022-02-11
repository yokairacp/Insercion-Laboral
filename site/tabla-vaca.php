<?php
require "coneVacante.php";
$conexion=conexion();
$vacante = "SELECT * FROM vacante";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de vagante</title>
</head>
<body>
    <div class="container-table">
      <div class="table__title">Consulta vagante</div>
      <div class="table__header">Nombre_de_la_empresa</div>
      <div class="table__header">Nombre_del_puesto</div>
      <div class="table__header">Funciones_o_perfil_del_puesto</div>
      <div class="table__header">Sueldo"</div>
      <div class="table__header">Ubicacion</div>
      <div class="table__header">Tipo_de_contrato</div>
      <div class="table__header">Horario</div>
      <div class="table__header">Correo_al_que_se_debe_enviar_el_curriculum</div>
      <div class="table__header">Persona_de_contacto</div>
      <div class="table__header">Telefono</div>
    
      <?php
      $resultado = mysqli_query($conexion, $vacante);
      while($row=mysqli_fetch_assoc($resultado)) {
      ?>
      <div class="table__item"><?php echo $row["Nombre_de_la_empresa"] ?></div>
      <div class="table__item"><?php echo $row["Nombre_del_puesto"] ?></div>
      <div class="table__item"><?php echo $row["Funciones_o_perfil_del_puesto"] ?></div>
      <div class="table__item"><?php echo $row["Sueldo"] ?></div>
      <div class="table__item"><?php echo $row["Ubicacion"] ?></div>
      <div class="table__item"><?php echo $row["Tipo_de_contrato"] ?></div>
      <div class="table__item"><?php echo $row["Horario"] ?></div>
      <div class="table__item"><?php echo $row["Correo_al_que_se_debe_enviar_el_curriculum"] ?></div>
      <div class="table__item"><?php echo $row["Persona_de_contacto"] ?></div>
      <div class="table__item"><?php echo $row["Telefono"] ?></div>




      <?php }?>
    </div>
<style>
  body {
    background: #ddd;
    font-family: monospace;
}

.container-table{
    width: 90%;
    background-color: white;
    margin: 50px auto;
    box-shadow: 0 0 20px purple;

    display: grid;
    grid-template-columns: repeat(10, 2fr);
    grid-auto-rows: 50px;
}

.table__title{
    grid-column-start: 1;
    grid-column-end: 10;

    background-color: #ff0080;
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
    font-size: 1.5em;
}

.table__item{
    font-size: 1.2em;
    padding: 10px;
}
</style>
</body>
</html>
