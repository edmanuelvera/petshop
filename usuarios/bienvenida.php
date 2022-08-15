<?php 


session_start();

if(!isset($_SESSION['usuario'])){
    echo'
            <script>
                alert("Porfavor ingresa tus datos");
                window.location = "../login/index.php"
            </script>
    ';

session_destroy();
die();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../principal/css/estilosmenu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/68bd6542c8.js" crossorigin="anonymous"></script>
</head>


<body>

<!-- EL HEADER Y MENU DE LA PAGINA!-->

    <header>
        <div class="contenido_menu">
            <div class="compra">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="logo">
                <img src="">
            </div>
            <div class="menu">
                <i id="boton_menu" class="fa-solid fa-bars"></i>
                <div id="opaco"></div>
                <nav id="nav">
                    <img src="../principal/image/garrita2.png">
                    <ul>
                        <li><a href="#" id="selected">Inicio</a></li>
                        <li><a href="../sobrenosotros/sobrenosotros_l.php">Sobre nosotros</a></li>
                        <li><a href="#">Animales</a></li>
                        <li id="welcome"><i class="fa-solid fa-user"></i> Bienvenid@ <?php echo $_SESSION['usuario']; ?><br>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


<!-- Cerrar sesion !--->


<div class="cerrarsesion">
    

<a href="../logica/cerrarsesion.php">Salir</i></a>

</div>


<!---  SLIDER PAGINA PRINCIPAL!--->

<br><br><br>
<div class="cajapadreslider">

    <div class="contenido_todo">
            <input type="radio" id="1" name="image-slide" hidden/>
            <input type="radio" id="2" name="image-slide" hidden/>
            <input type="radio" id="3" name="image-slide" hidden/>

            <div class="slide">
                <div class="objetoslide">
                    <img src="../slider/images/img1.png">
                </div>
                <div class="objetoslide">
                    <img src="../slider/images/img2.png">
                </div>
                <div class="objetoslide">
                    <img src="../slider/images/img3.png">
                </div>
            </div>

        <div class="paginacion">
            <label class="pequeñaimagen" for="1">
                <img src="../slider/images/img1.png">
            </label>
            <label class="pequeñaimagen" for="2">
                <img src="../slider/images/img2.png">
            </label>
            <label class="pequeñaimagen" for="3">
                <img src="../slider/images/img3.png">
            </label>
        </div>
    </div>
</div>



<!-- PRIMER CUERPO DE PAGINA PRINCIPAL!-->
            
<div class="contenido">
    <div class="documento_contenido">
        <div class="texto_contenido">
            <h1>
                Queremos mejorar la vida de los peluditos en casa, tenemos disponibilidad de productos para: Perritos, mishis y exoticos.
            </h1>
            <p>
                Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Necessitatibus voluptatibus, cupiditate quas libero eum obcaecati odio architecto sapiente nobis id nihil quisquam doloremque accusantium et officiis vel quidem praesentium, exercitationem.
            </p>
            <input type="button" value="Más información">
        </div>
            <div class="imagen_fondo">
                <img src="../principal/image/doki.png">
            </div>
    </div>
</div>


<!--- ARTICULOS CUERPO PAGINA PRINCIPAL2!--->

<div class="cuerpodearticulos">
    <div class="cajadearticulo">
        <img src="../principal/image/art1.png">
        <hr>
        <h2>Perrito</h2><hr><br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, corporis.</p>
    </div>
    <div class="cajadearticulo">
        <img src="../principal/image/art2.png">
        <hr>
        <h2>Gatito</h2><hr><br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, corporis.</p>
    </div>
    <div class="cajadearticulo">
        <img src="../principal/image/art3.png">
        <hr>
        <h2>Otros</h2><hr><br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, corporis.</p>
    </div>
</div>

<!-- FOOTER DE LA PAGINA !-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <script src="https://kit.fontawesome.com/68bd6542c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../footer/css/estilos.css">
</head>
<body>
    <footer>
        <div class="fondo_footer">
            <div class="caja_footeer">
                <div class="imagen_defooter">
                    <img src="../footer/images/wofwof.png">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor.</p>
                </div>
            </div>
            <div class="caja_footeer">
                <h2>Tenemos</h2>
                <a href="#">Alimentos</a>
                <a href="#">Medicinas</a>
                <a href="#">Juguetes</a>
            </div>
            <div class="caja_footeer">
                <h2>Encuentranos en</h2>
                <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
            </div>
        </div>
        <div class="derechosdeautor">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>Edmanuel Vera</b></p>
        </div>
    </footer>
</body>
</html>

<!-- JAVA SCRIPT!-->

    <script src="../principal/js/funciones.js"></script>
</body>
</html>