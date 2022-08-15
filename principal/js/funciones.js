document.getElementById("boton_menu").addEventListener("click",mostrar_menu);
document.getElementById("opaco").addEventListener("click",ocultar_menu);

let menu = document.getElementById("nav");
let fondo = document.getElementById("opaco");


/* funciones */

function mostrar_menu(){
	menu.style.right = "0px";
	fondo.style.display = "block";

}

function ocultar_menu(){
	menu.style.right = "-250px";
	fondo.style.display = "none";
}