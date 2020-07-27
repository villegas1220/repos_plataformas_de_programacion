<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">  
	     <link rel="stylesheet" href="css/main.css">
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
                      <input name="nombre" type="text" class="form-control" id="nombre"  minlength="8" maxlength="16" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo, 8-16 caracteres.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="usuario">Nombre de usuario</label>
                      <input name="usuario" type="text" class="form-control" id="usuario" minlength="8" maxlength="16" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo, 8-16 caracteres.</div>   
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="contraseña">Contraseña</label>
                      <input name="contraseña" type="password" class="form-control" id="contraseña" minlength="8" maxlength="16" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo, 8-16 caracteres.</div>   
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="correo">Correo</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="correo" type="email" class="form-control" id="correo" placeholder="name@example.com" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>  
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="departamentos">Departamentos</label>
                        <select class="form-control" id="select-departamentos" name="select-departamentos" onchange="Cambio(this.id,'select-ciudad')">
                          <option value="">Seleccione</option>
                          <option value="0">Antioquia</option>
                          <option value="1">Arauca</option>
                          <option value="2">Cundinamarca</option>
                          <option value="3">Magdalena</option>
                          <option value="4">Valle del Cauca</option>
                          <option value="5">Risaralda</option>
                        </select>
                      </div>
                    <div class="col-md-4 mb-3">
                      <label for="ciudad">Ciudad</label>
                        <select class="form-control" id="select-ciudad" name="select-ciudad" required=""></select>
                        <div class="valid-feedback">¡Ok válido!</div>
                        <div class="invalid-feedback">Complete el campo.</div> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                      <div class="valid-feedback">¡Aceptado!</div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class=" col-md-4 mb-3">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                    <div class=" col-md-4 mb-3">
                        <button onclick="location.href='login.php'">Ya tengo cuenta</button>
                    </div>
                  </div>
                </form>    
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script type="text/javascript" src="js/main.js"></script> 
     

  </body>
</html>