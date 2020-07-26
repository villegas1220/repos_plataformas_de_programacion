let select_ciudad, select_departamento;
let departamentos = [];
departamentos[0] = "Antioquia";

let ciudades = [];
ciudades[0] = ["medellin|Medellín","envigado|Envigado","sabaneta|Sabaneta","bello|Bello"];
ciudades[1] = ["cali|Cali","buga|Buga","palmira|Palmira","cartago|Cartago"];
ciudades[2] = ["arauca|Arauca","arauquita|Arauquita","saravena|Saravena"];
ciudades[3] = ["bituima|Bituima","chipaque|Chipaque","ubaque|Ubaque","cota|Cota"];
ciudades[4] = ["santa Marta|Santa Marta","algarrobo|Algarrobo","concordia|Concordia"];
ciudades[5] = ["pereira|Pereira","dosquebradas|Dosquebradas","la virginia|La Virginia","santa rosa de cabal|Santa Rosa De Cabal"];

window.onload = ()=>{
    select_departamentos = document.getElementById("select-departamentos");
    select_ciudad = document.getElementById("select-ciudad");
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


