<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css">  
	     <link rel="stylesheet" href="css/main.css">
    <title>Login</title>  
  </head>
  <body>
     <header>
     </header> 
    <div></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header bg-primary">Login</div>
        <div class="card-body">
        <form id="form2" action="procesar.php" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="usuario">Usuario</label>
                      <input name="usuariol" type="text" class="form-control" id="usuariol" minlength="8" maxlength="16" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo, 8-16 caracteres.</div>   
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="contraseña">Contraseña</label>
                      <input name="contraseñal" type="password" class="form-control" id="contraseñal" minlength="8" maxlength="16" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo, 8-16 caracteres.</div>   
                    </div> 
                  </div>
                  <div class="form row">
        			       <div class=" col-md-4 mb-3">
        				        <button class="btnIng btn-primary" type="">Ingresar</button>
        			       </div>
    				          <div class=" col-md-4 mb-3">
                  		  <button onclick="location.href='index.php'">Registrarme</button>
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