<?php
	$salt = "JPVM2020";
	echo md5($_POST['contrasena'].$salt);
?>