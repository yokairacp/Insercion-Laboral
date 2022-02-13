<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/registroestu.css">
    <link rel="icon" href="images/logo.jfif" type="image/x-icon">
    <title>Resgistrar Empresa</title>
</head>

<body>
    <div class="container" id="advanced-search-form">
        <h2>Registrar empresa</h2>
        <form action="insertar2.php" method="POST" class="form_contact">
          <div class="form-group">
                <label for="last-name">Nombre de la empresa</label>
                <input type="text" class="form-control" placeholder="Escribe el nombre de laempresa" name="nempresa">
            </div>
            <div class="form-group">
              <label for="last-name">RNC</label>
              <input type="text" class="form-control" placeholder="RNC" name="rnc">
        
        </div>
        <div class="form-group">
            <label>¿Desea que se conozca la identidad de su empresa?</label>
            <select name="identidad">
                    <optgroup label="Entradas textuales">
                    <option>Si</option>
                     <option>No</option>
                   </optgroup>
</select>
        
      </div>
      <div class="form-group">
          <label>¿Dispone su empresa de un Departamento de Formación dentro de la empresa?</label>
          <select name="departamento">
                    <optgroup label="Entradas textuales">
                    <option>Si</option>
                     <option>No</option>
                   </optgroup>
                   </select>
      </div>
      <div class="form-group">
        <label>Alcance de la empresa</label>
        <select name="alcance">
                    <optgroup label="Entradas textuales">
                    <option>Nacional/local</option>
                     <option>Multinacional</option>
                   </optgroup>
                   </select>
    </div>
    <div class="form-group">
      <label for="age">Actividad economica a a la que se dedica la empresa:</label>
      <input type="text" class="form-control" placeholder="actividad" name="actividad">
  </div>

            <div class="form-group">
                <label for="country">Industria </label><br>
                <select name="industria">
                    <optgroup label="Años">
                      <option selected="selected"></option>
                    <option>Agricola</option>
                    <option>Comercio</option>
                     <option>Ganaderia</option>
                     <option>Industria de extraccion</option>
                     <option>Industria de manofactura</option>
                     <option>Servicios</option>
                     <option>Otros</option>

                    </optgroup>
                </select>
            </div>
          
            <div class="form-group">
                <label for="number">Tamaño de la empresa</label>
                <select name="tamaño">
                <optgroup label="tamaño">
                    <option selected="selected"></option>
                    <option>Micro</option>
                    <option>Pequeña</option>
                     <option>Mediana</option>
                     <option>Grande</option>
                   </optgroup>
                     </select>
            </div>
            <div class="form-group">
                <label for="age">Direccion</label>
                <input type="text" class="form-control" placeholder="Direccion" name="direccion">
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
              <option>La vega</option>
              <option selected="selected">Santiago</option>
              
             </optgroup>
               </select>
      </div>
            <div class="form-group">
                <label for="email">Pais donde opera la empresa</label>
                <select name="opera">
                    <optgroup label="Entradas textuales">
                    <option selected="selected">Republica Dominicana</option>
              
                   </optgroup>
                     </select>
       </div>
            
            <div class="form-group">
                <label for="nombre">Telfono principal</label>
                <input type="text" class="form-control" placeholder="telefono principal" name="telefonop">
            </div>
            <div class="form-group">
                <label for="apellidos">Telefono directo</label>
                <input type="text" class="form-control" placeholder="telefono directo" name="telefonod">
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
                <label for="contraseña">Telefono y extension  de la empresa</label>
                <input type="text" class="form-control" placeholder="escriba el telefono  y la extension de  la empresa" name="ext">
            </div>
            <div class="form-group">
                <label for="contraseñac">Correo de la empresa</label>
                <input type="email" class="form-control" placeholder="escriba el correo de la empresa" name="correoempresa">
            </div>
            
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search">  Registrarse</button>
            
        </form>
    </div>
</body>

</html>
