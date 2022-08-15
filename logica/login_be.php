<?php

session_start();


include 'conexion_be.php';


$apodo = $_POST['apodo'];

$password = $_POST['password'];

$comprobar_l = mysqli_query($conexion, "SELECT * FROM usuarios WHERE apodo='$apodo' and password='$password' ");


if(mysqli_num_rows($comprobar_l) > 0){
	$_SESSION['usuario'] = $apodo;
	header("location: ../usuarios/bienvenida.php");
	exit();
}else{
	echo '
	<script>
	alert("Los datos no se encuentran en la base de datos");
	window.location = "../login/index.php";
	</script>
	';

	exit();
}



?>