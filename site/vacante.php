<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/registroestu.css">
    <link rel="icon" href="images/logo.jfif" type="image/x-icon">
    <title>Vacante</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2>Vacante</h2>
        <form action="insertar.php" method="POST" class="form_contact">
           
            <div class="form-group">
                <label for="age">Nombre de la empresa</label>
                <input type="text" class="form-control" placeholder="nombre de la  empresa" name="nempresa">
            </div>
            <div class="form-group">
                <label for="age">Nombre del puesto</label>
                <input type="text" class="form-control" placeholder="Nombre del puesto" name="npuesto">
            </div>
           
            <div class="form-group">
                <label for="nombre">Funciones o perfil del puesto</label>
                <input type="text" class="form-control" placeholder="" name="funciones">
            </div>
            <div class="form-group">
                <label for="apellidos">sueldo</label>
                <input type="text" class="form-control" placeholder="ubicacion" name="sueldo">
            </div>
            <div class="form-group">
                <label for="apellidos">Ubicacion</label>
                <input type="text" class="form-control" placeholder="ubicacion" name="ubicacion">
            </div>
            
        <div class="form-group">
            <label>Tipo de contrato</label>
            <select name="optraradio">
                    <optgroup label="Entradas textuales">
                    <option>Temporal</option>
                     <option>Fijo</option>
                   </optgroup>
</select>
        
      </div>
                
                <div class="form-group">
                <label for="direccion">Horario</label>
                <input type="text" class="form-control" placeholder="Horario" name="Horario">
            </div>
            <div class="form-group">
                <label for="sector">Correo al que se debe enviar el curriculum:
                </label>
                <input type="text" class="form-control" placeholder="" name="correocurriculum">
            </div>
            <div class="form-group">
                <label for="municipio">Persona de Contacto</label>
                <input type="text" class="form-control" placeholder="" name="personacontacto">
            </div>
            
            <div class="form-group">
                <label for="movil">Telefono </label>
                <input type="text" class="form-control" placeholder="telefono" name="telefono">
            </div>
           
           
    

            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search">  Registrarse</button>
        </form>
    </div>
</body>

</html>
