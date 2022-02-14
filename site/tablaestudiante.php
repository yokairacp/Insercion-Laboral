<?php
require "cn.php";
$conexion=conexion();
$egresado = "SELECT * FROM egresado";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estudiante o egresado</title>
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
    grid-template-columns: repeat(26, 1fr);
    grid-auto-rows: 70px;
}

.table__title{
    grid-column-start: 1;
    grid-column-end: 27;

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
      <div class="table__title">Estudiante o  Egresado</div>
      <div class="table__header">Año graduacion</div>
      <div class="table__header">Institucion</div>
      <div class="table__header">Curso</div>
      <div class="table__header">Matricula</div>
      <div class="table__header">Cedula</div>
      <div class="table__header">Carrera Tecnica</div>
      <div class="table__header">Tecnicobasico</div>
      <div class="table__header">Nombres</div>
      <div class="table__header">Apellidos</div>
      <div class="table__header">Fecha nacimiento</div>
      <div class="table__header">Sexo</div>
      <div class="table__header">Direccion</div>
      <div class="table__header">Sector</div>
      <div class="table__header">Seccion</div>
      <div class="table__header">Municipio</div>
      <div class="table__header">Provincia</div>
      <div class="table__header">Nacionalidad</div>
      <div class="table__header">Telefono</div>
      <div class="table__header">Movil</div>
      <div class="table__header">Posee licencia</div>
      <div class="table__header">Posee vehiculo</div>
      <div class="table__header">Email </div>
      <div class="table__header">Confirme email</div>
      <div class="table__header">Elija Contraseña</div>
      <div class="table__header">Confirme contraseña</div>
      <div class="table__header">Curriculum</div>
   
    
      <?php
      $resultado = mysqli_query($conexion, $egresado);
      while($row=mysqli_fetch_assoc($resultado)) {
      ?>

      <div class="table__item"><?php echo $row["añograduacion"] ?></div>
      <div class="table__item"><?php echo $row["institucioneducativa"] ?></div>
      <div class="table__item"><?php echo $row["curso"] ?></div>
      <div class="table__item"><?php echo $row["matricula"] ?></div>
      <div class="table__item"><?php echo $row["cedulaidentidad"] ?></div>
      <div class="table__item"><?php echo $row["carreratecnica"] ?></div>
      <div class="table__item"><?php echo $row["tecnicobasico"] ?></div>
      <div class="table__item"><?php echo $row["nombres"] ?></div>
      <div class="table__item"><?php echo $row["apellidos"] ?></div>
      <div class="table__item"><?php echo $row["fechanacimiento"] ?></div>
      <div class="table__item"><?php echo $row["sexo"] ?></div>
      <div class="table__item"><?php echo $row["direccion"] ?></div>
      <div class="table__item"><?php echo $row["sector"] ?></div>
      <div class="table__item"><?php echo $row["seccion"] ?></div>
      <div class="table__item"><?php echo $row["municipio"] ?></div>
      <div class="table__item"><?php echo $row["provincia"] ?></div>
      <div class="table__item"><?php echo $row["paisnacionalidad"] ?></div>
      <div class="table__item"><?php echo $row["telefonoresidencial"] ?></div>
      <div class="table__item"><?php echo $row["telefonomovil"] ?></div>
      <div class="table__item"><?php echo $row["poseelicenciadeconducir"] ?></div>
      <div class="table__item"><?php echo $row["poseevehiculopropio"] ?></div>
      <div class="table__item"><?php echo $row["email"] ?></div>
      <div class="table__item"><?php echo $row["confirmacionemail"] ?></div>
      <div class="table__item"><?php echo $row["elijacontraseña"] ?></div>
      <div class="table__item"><?php echo $row["confirmecontraseña"] ?></div>
      <div class="table__item"><?php echo $row["insertar"] ?></div>
      <?php 
      }
      ?>
    </div>

</body>
</html>