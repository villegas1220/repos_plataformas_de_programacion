<?php
	$salt = "JPVM2020";
	$dato = array();
	if(isset($_POST["nombre"]) && isset($_POST["usuario"]) && isset($_POST["select-ciudad"]) && isset($_POST["correo"]) && isset($_POST["select-departamentos"]))
	{
		$dato["nombre"]=$_POST["nombre"];
		$dato["usuario"]=$_POST["usuario"];
		$dato["select-departamentos"]=$_POST["select-departamentos"];
		$dato["select-ciudad"]=$_POST["select-ciudad"];
		$dato["correo"]=$_POST["correo"];
	}
	$dato["contrasena"]= md5($_POST['contrasena'].$salt);
	echo json_encode($dato)
?>