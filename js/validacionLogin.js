let frm;

window.onload = ()=>{
  frm = document.getElementById("form2");
}

function procesarLogin(){
  let usuario = localStorage.getItem("dato");
  //if(usuario){
    fetch('./scripts/script.php', {
    method: 'post',
    body: new FormData(frm)
    }).then(function(response) {
      return response.json();
    }).then(function(json){
      validarLogin(json);
      console.log("Test!");
    }).catch(function(err) {
    // Error :(
      alert(err);
    });
  //}
}

 function validarLogin(json){
  let usuario = JSON.parse(localStorage.getItem("dato"));
  if (dato.contrasena == json.contrasena)
  {
    location.href = "localhost/index.html"; 
  }
  else{
    alert("Clave incorrecta");
  }
  console.log(json);
}
