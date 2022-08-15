<?php

include 'conexion_be.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$apodo = $_POST['apodo'];
$password = $_POST['password'];


$datos_r = "INSERT INTO usuarios(nombre, apellido, apodo, password) 
				VALUES ('$nombre', '$apellido', '$apodo', '$password')" ;

// Validación <- apodo


$validar_apodo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE apodo='$apodo' ");

if(mysqli_num_rows($validar_apodo) > 0){
	echo'
		<script>
		alert("El apodo ya esta en uso, debe crear uno diferente");
		window.location = "../login/index.php";
		</script>
	';
	exit();
}

// El registro <-


$ejecutar = mysqli_query($conexion, $datos_r);

if($ejecutar){
	echo '
		<script> alert("Registrado exitosamente");
		window.location = "../login/index.php";
		</script>
	';
}


mysqli_close($conexion);

?>