<?php

session_start();

if(isset($_SESSION['usuario'])){
	header("location: ../usuarios/bienvenida.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login culperma</title>
	<link rel="stylesheet" href="../login/assets/css/estilos.css">
	<link rel="stylesheet" href="../header/estiloheader.css">
	<link rel="stylesheet" type="text/css" href="../footer/css/estilos.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/68bd6542c8.js" crossorigin="anonymous"></script>
</head>

<!-- EL NAV / MENÚ !-->

<header>
		<div class="contenido_menu">
			<div class="compra">
				<i class="fa-solid fa-cart-shopping"></i>
			</div>
			<div class="logo">
				<img src="header/images/garrita2.png">
			</div>
			<div class="menu">
				<i id="boton_menu" class="fa-solid fa-bars"></i>
				<div id="opaco"></div>
				<nav id="nav">
					<img src="../header/images/garrita2.png">
					<ul>
						<li><a href="../principal.php">Inicio</a></li>
						<li><a href="../sobrenosotros/sobrenosotros.php">Sobre nosotros</a></li>
						<li><a href="#">Animales</a></li>
						<li><a href="../proyecto/index.php" id="selected">Acceder</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

		<br><br><br><br><br><br><br><br>

<!-- CUERPO DEL LOGIN !-->

	<div class="contenedor__todo">
		               <!--Cuadrado fondo para la sección del login-->
		<div class="caja__fondo">
			<div class="caja__fondo__login">
				<h3>Ya tienes una cuenta?</h3>
				<p>Debes iniciar sesión para ingresar al sistema</p>
				<button id="btn__iniciar__sesion">Iniciar sesion</button>
			</div>

		               <!-- Cuadrado fondo para la sección de registro-->
			<div class="caja__fondo__registro">
				<h3>Aún no tienes una cuenta?</h3>
				<p>Debes crear un usuario para ingresar al sistema</p>
				<button id="btn__registra__usuario">Registra un usuario</button>
			</div>
		</div>
		               
		<div class="contenedor__formulario__login__registro">
						<!-- Cuadro de inicio de sesion-->
			<form action="../logica/login_be.php" method="POST" class="formulario__login">
				<h2>Ingresa tú usuario</h2>
				<input type="text" placeholder="Usuario" name="apodo">
				<input type="password" placeholder="Contraseña" name="password">
				<button>Entrar</button>
			</form>
		                 <!-- Cuadro de registro al sistema-->
			<form action="../logica/registro_be.php" method="POST" class="formulario__registro">
				<h2>Crea un usuario</h2>
				<input type="text" placeholder="Nombre" name="nombre">
				<input type="text" placeholder="Apellido" name="apellido">
				<input type="text" placeholder="Apodo" name="apodo">
				<input type="password" placeholder="Contraseña" name="password">
				<button>Registrar</button>
			</form>
		</div>
	</div>

	<br><br><br>

<?php

include '../footer/footer.php'

?>



<script src="assets/js/script.js"></script>
<script src="../header/js/funciones.js"></script>

</html>