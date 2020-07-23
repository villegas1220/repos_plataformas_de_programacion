<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	<link rel="stylesheet" href="C:\laragon\www\css\main.css">
    <title>Ejemplos</title>  
  </head>
  <body>
     <header>
     </header> 
    <div></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header bg-danger ">Registro</div>
        <div class="card-body">
        <form id="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="usuario">Nombre de usuario</label>
                      <input name="usuario" type="text" class="form-control" id="usuario" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="contraseña">Contraseña</label>
                      <input name="contraseña" type="password" class="form-control" id="contraseña" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="correo">Correo</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="correo" type="email" class="form-control" id="correo" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>  
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="departamento">Departamento</label>
                        <select class="seleccion" name="cosa" onchange="cambia()">
                          <option value="0">Seleccione </option>
                          <option value="1">Atlantico </option>
                          <option value="2">Antioquia </option>
                          <option value="3">Caldas </option>
                          <option value="4">Chocò </option>
                          <option value="5">Risaralda </option>
                          <option value="6">Valle del Cauca </option>
                        </select>
                      </div>
                    <div class="col-md-4 mb-3">
                      <label for="ciudad">Ciudad</label>
                        <select class="seleccion" name="opt">
                          <option value="-">-
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                      <div class="valid-feedback">¡Aceptado!</div>
                    </div>
                  </div>
                  <button class="btn btn-danger" type="submit">Enviar</button>
                </form>    
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="js/codigo.js"></script> 
    <script src="js/cambio.js"></script> 

  </body>
</html>