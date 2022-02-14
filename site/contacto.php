<?php
require "cn.php";
$conexion=conexion();
$contacto = "SELECT * FROM contacto";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
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
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: 70px;
}

.table__title{
    grid-column-start: 1;
    grid-column-end: 4;

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
      <div class="table__title">Mensajes</div>
      <div class="table__header">Nombre</div>
      <div class="table__header">Email</div>
      <div class="table__header">Mensaje</div>
      
      <?php
      $resultado = mysqli_query($conexion, $contacto);
      while($row=mysqli_fetch_assoc($resultado)) {
      ?>
      <div class="table__item"><?php echo $row["nombre"] ?></div>
      <div class="table__item"><?php echo $row["email"] ?></div>
      <div class="table__item"><?php echo $row["mensaje"] ?></div>
      <?php 
      }
      ?>
    </div>

</body>
</html>