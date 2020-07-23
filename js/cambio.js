function change(departamento, ciudad){
    departamento = document.getElementById(departamento);
    ciudad = document.getElementById(ciudad);
    ciudad.value ="";
    ciudad.innerHTML = "";
    if(departamento.value == "1"){
    var optionArray = ["|","Barranquilla","Baranoa","Candelaria","Campo de la cruz"];
};

 for(option = 0;option < optionArray.length; option++){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    ciudad.options.add(newOption);
  };    
}