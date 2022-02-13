<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/registroestu.css">
    <link rel="icon" href="images/logo.jfif" type="image/x-icon">
    <title>Resgistrate Estudiante o egresado</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2>Registrate Estudiante o egresado</h2>
        <form action="insertar1.php" method="POST" class="form_contact">
            <div class="form-group">
                <label for="first-name">Institucion educativa a la que perteneces</label>
                <select name="institucuin">
                    <optgroup label="Instituciones">
                    <option></option>
                    <option selected="selected">IPISA</option>
                   </optgroup>
                     </select>
            </div>
            <div class="form-group">
                <label for="last-name">Matricula</label>
                <input type="text" class="form-control" placeholder="" name="matricula">
            </div>
            <div class="form-group">
                <label for="country">Año de graduacion </label><br>
                <select name="graduacion">
                    <optgroup label="Años">
                      <option selected="selected">  </option>
                    <option></option>
                    <option>2006-2011</option>
                     <option>2007-2012</option>
                     <option>2008-2013</option>
                     <option>2009-2014</option>
                     <option>2010-2015</option>
                     <option>2011-2016</option>
                     <option>2012-2017</option>
                     <option>2013-2018</option>
                     <option>2014-2019</option>
                     <option>2015-2020</option>
                     <option>2016-2021</option>

                    </optgroup>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="number">Curso</label>
                <select name="entradalista1">
                <optgroup label="Curso">
                    <option selected="selected">  </option>
                    <option>3RO</option>
                    <option>4TO</option>
                     <option>5TO</option>
                     <option>6TO</option>
                   </optgroup>
                     </select>
            </div>
            <div class="form-group">
                <label for="age">Cedula de identidad</label>
                <input type="text" class="form-control" placeholder="cedula" name="cedula">
            </div>
            <div class="form-group">
                <label for="email">Carrera Tecnica</label>
                <select name="carrera">
                    <optgroup label="Entradas textuales">
                    <option>contabilidad</option>
                    <option>Informatica</option>
                     <option>Confeccion y patronaje</option>
                     <option>Ebanisteria</option>
                    <option>Electronica</option>
                     <option>Mecanica Industrial</option>
                    <option>Electricidad</option>
                     <option>Mecanica automotriz</option>
                   </optgroup>
                     </select>
            </div>
            <div class="form-group">
                <label for="category">Tecnico Basico</label>
                <select name="tecnico">
                <optgroup label="Entradas textuales">
                    <option>contabilidad</option>
                    <option>Informatica</option>
                     <option>Confeccion y patronaje</option>
                     <option>Ebanisteria</option>
                    <option>Electronica</option>
                     <option>Mecanica Industrial</option>
                    <option>Electricidad</option>
                     <option>Mecanica automotriz</option>
                   </optgroup>
                     </select>
            </div>
            
            <div class="form-group">
                <label for="nombre">Nombres</label>
                <input type="text" class="form-control" placeholder="Escribe tus nombres" name="nombres">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" placeholder="Escribe tus apellidos" name="apellidos">
            </div>
            <div class="form-group">
                <label for="nacimiento">Fecha de nacimiento</label>
                <input type="date" class="form-control" placeholder="" name="fecha_de_nacimiento">
            </div>
            <div class="form-group">
                <label>Sexo</label>
                <select name="sexo">
                <optgroup label="Entradas textuales">
                    <option>Hombre</option>
                    <option>Mujer</option>
                    
                   </optgroup>
                     </select>
            </div>
                <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" placeholder="Escribe tu direccion" name="direccion">
            </div>
            <div class="form-group">
                <label for="sector">Sector</label>
                <input type="text" class="form-control" placeholder="sector al que perteneces" name="sector">
            </div>
            <div class="form-group">
                <label for="sector">Seccion</label>
                <input type="text" class="form-control" placeholder="" name="seccion">
            </div>
            <div class="form-group">
                <label for="municipio">Municipio</label>
                <input type="text" class="form-control" placeholder="municipio al que perteneces" name="municipio">
            </div>
            <div class="form-group">
                <label for="Provincia">Provincia</label><br>
                <select name="provincia">
                    <optgroup label="Entradas textuales">
                    <option>Santiago</option>
                     <option>La vega</option>
                   </optgroup>
                     </select>
            </div>
            <div class="form-group">
                <label for="Pais">Pais de nacionalidad</label>
                <select name="pais">
                    <optgroup label="Entradas textuales">
                    <option>Republica Dominicana</option>
                     <option>Otro...</option>
                   </optgroup>
                     </select>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono residencial</label>
                <input type="text" class="form-control" placeholder="telefono de residencia" name="telefonor">
            </div>
            <div class="form-group">
                <label for="movil">Telefono Movil</label>
                <input type="text" class="form-control" placeholder="telefono movil" name="movil">
            </div>
            <div class="form-group">
                <label for="licencia">¿Posee licencia de conducir?</label>
                <select name="licencia">
                    <optgroup label="Entradas textuales">
                    <option>Si</option>
                     <option>No</option>
                   </optgroup>
                     </select>
                    
                </div>
        
            <div class="form-group">
                <label for="vehiculo">¿Posee vehiculo propio?</label>
                <select name="vehiculo">
                    <optgroup label="Entradas textuales">
                    <option>Si</option>
                     <option>No</option>
                   </optgroup>
</select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="correo electronico" name="email">
            </div>
            <div class="form-group">
                <label for="cemail">Confirmacion de email</label>
                <input type="email" class="form-control" placeholder="confirme su correo electronico" name="emailc">
            </div>
            <div class="form-group">
                <label for="contraseña">Elija una contraseña</label>
                <input type="password" class="form-control" placeholder="escriba su contraseña" name="contraseña">
            </div>
            <div class="form-group">
                <label for="contraseñac">Confirme contraseña</label>
                <input type="password" class="form-control" placeholder="confirme su contraseña" name="contraseñac">
            </div>
            <div class="form-group">
                <label for="curriculum">Insertar curriculum</label>
                <input type="file" class="form-control" name="curriculum">
            </div>

            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search">  Registrarse</button>
        </form>
    </div>
</body>

</html>
