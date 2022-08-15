<?php

include 'conexion_backend.php';

$nombre_usuario = $_POST['nombre_usuario'];
$apellido_usuario = $_POST['apellido_usuario'];
$apodo_usuario = $_POST['apodo_usuario'];
$password_usuario = $_POST['password_usuario'];

$datos_user = "INSERT INTO usuarios_registrados_sistema(nombre_usuario, apellido_usuario, apodo_usuario, password_usuario) VALUES ('$nombre_usuario', '$apellido_usuario', '$apodo_usuario', '$password_usuario')";

$ejecutar = mysqli_query($conexion, $datos_user);


?>