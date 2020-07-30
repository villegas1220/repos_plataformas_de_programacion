
let select_ciudad, select_departamento;
let departamentos = [];
departamentos[0] = "Amazonas";

let ciudades = [];
ciudades[0] = ["leticia|Leticia",];
ciudades[1] = ["medellin|Medellín","envigado|Envigado","sabaneta|Sabaneta","bello|Bello"];
ciudades[2] = ["arauca|Arauca","arauquita|Arauquita","saravena|Saravena" ];
ciudades[3] = ["barranquilla|Barranquilla"];
ciudades[4] = ["cartagena|Cartagena"];
ciudades[5] = ["tunja|Tunja"];
ciudades[6] = ["manizales|Manizales"];
ciudades[7] = ["florencia|Florencia"];
ciudades[8] = ["yopal|Yopal"];
ciudades[9] = ["popayan|Popayan"];
ciudades[10] = ["valledupar|Valledupar"];
ciudades[11] = ["quibdo|Quibdo"];
ciudades[12] = ["monteria|Monteria"];
ciudades[13] = ["bogota|Bogota","bituima|Bituima","chipaque|Chipaque","ubaque|Ubaque","cota|Cota"];
ciudades[14] = ["inirida|Inirida"];
ciudades[15] = ["san jose del guaviare|San Jose del Guaviare"];
ciudades[16] = ["neiva|Neiva"];
ciudades[17] = ["rioacha|Rioacha"];
ciudades[18] = ["santa Marta|Santa Marta","algarrobo|Algarrobo","concordia|Concordia"];
ciudades[19] = ["villavicencio|Villavicencio"];
ciudades[20] = ["pasto|Pasto"];
ciudades[21] = ["cucuta|Cucuta"];
ciudades[22] = ["mocoa|Mocoa"];
ciudades[23] = ["armenia|Armenia"];
ciudades[24] = ["pereira|Pereira","dosquebradas|Dosquebradas","la virginia|La Virginia","santa rosa de cabal|Santa Rosa De Cabal"];
ciudades[25] = ["san andres|San Andres"];
ciudades[26] = ["bucaramanga|Bucaramanga"];
ciudades[27] = ["sincelejo|Sincelejo"];
ciudades[28] = ["ibague|Ibague"];
ciudades[29] = ["cali|Cali","buga|Buga","palmira|Palmira","cartago|Cartago"];
ciudades[30] = ["mitu|Mitu"];
ciudades[31] = ["puerto carreño|Puerto Carreño"];


var dato, nombre, contrasena, select_departamentos, correo, usuario;

window.onload = ()=>{
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
    escribir();
  }
  else{
    dato = [];
  }
}

function escribir(){
  for (var i in dato){
    console.log(dato[i]);
  }
}

function guardar(){
  var user = {};
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
function asignar(){
  var btn = document.getElementById("btnEnviar");
  btn.addEventListener("click", guardar);
}

function Cambio(){
    let ArregloOpciones;
    select_ciudad.innerHTML = "";
    ArregloOpciones=ciudades[select_departamentos.value];
    for(var opcion in ArregloOpciones){
        var arreglo = ArregloOpciones[opcion].split("|");
        var nuevaOpcion = document.createElement("option");
        nuevaOpcion.value = arreglo[0];
        nuevaOpcion.innerHTML = arreglo[1];
        select_ciudad.options.add(nuevaOpcion);
    }
}
//VALIDACION DE BOOTSTRAP
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
