<?php
/*$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];
$departamento = $_POST['select-departamentos'];
$ciudad = $_POST['select-ciudad'];

echo "Recibimos... <br>";
echo "Nombre: ".$nombre."<br>";
echo "Usuario: ".$usuario."<br>";
echo "Contrasena: ".$contrasena."<br>";
echo "Correo: ".$correo."<br>";
echo "Departamento: ".$departamento."<br>";
echo "Ciudad: ".$ciudad."<br>";*/
$salt = "JPVM2020";
echo md5($_POST['contrasena'].$salt);
?>