var dato, nombre, contrasena, correo, usuario;

window.onload = init;

function init(){
    select_departamentos = document.getElementById("select-departamentos");
    select_ciudad = document.getElementById("select-ciudad");
    nombre=document.getElementById("nombre");
    usuario=document.getElementById("usuario");
    contrasena=document.getElementById("contrasena");
    correo=document.getElementById("correo");
    asignar();
    cargar();
}

function cargar(){
  dato = JSON.parse(localStorage.getItem("dato"));
  if (dato) {
    pintar();
  }
  else{
    dato = [];
  }
}

function pintar(){
  for (var i in dato){
    console.log(dato[i]);
  }
}

function guardar(){
  var user = {};
  if (nombre.value == "" || contrasena.value =="" || select_ciudad.value == "" || correo.value=="" || usuario.value==""){}
  else
  {
  user.nombre = nombre.value;
  user.user = usuario.value;
  user.contrasena = contrasena.value;
  user.select_departamentos = select_departamentos.value;
  user.select_ciudad = select_ciudad.value;
  user.correo = correo.value;
  dato.push(user);
  str = JSON.stringify(dato);
  localStorage.setItem("dato", str);
  }
}
function asignar(){
  var btn = document.getElementById("btnEnviar");
  btn.addEventListener("click", guardar);
}