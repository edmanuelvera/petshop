/* Declarando variables */ 

let contenedor__formulario__login__registro = document.querySelector(".contenedor__formulario__login__registro");
let formulario__login = document.querySelector(".formulario__login");
let formulario__registro = document.querySelector(".formulario__registro");
let caja__fondo__login = document.querySelector(".caja__fondo__login");
let caja__fondo__registro = document.querySelector(".caja__fondo__registro");


/* ejecutando funciones*/ 

document.getElementById("btn__registra__usuario").addEventListener("click", registrar);
document.getElementById("btn__iniciar__sesion").addEventListener("click", iniciar);
window.addEventListener("resize", resizePagina);

/* Creando funciones y además responsive */

resizePagina();

function resizePagina() {
	if(window.innerWidth > 850){
		caja__fondo__login.style.display = "block";
		caja__fondo__registro.style.display = "block";
	}else{
		caja__fondo__login.style.display = "none";
		formulario__login.style.display = "block";
		caja__fondo__registro.style.display = "block";
		formulario__registro.style.display = "none";
		contenedor__formulario__login__registro.style.left = "0px";
	}
}

function registrar (){

	if(window.innerWidth > 850){
		formulario__registro.style.display = "block";
		contenedor__formulario__login__registro.style.left = "410px";
		formulario__login.style.display = "none";
	}else{
		formulario__registro.style.display = "block";
		contenedor__formulario__login__registro.style.left = "0px";
		formulario__login.style.display = "none";
		caja__fondo__login.style.display = "block";
		caja__fondo__registro.style.display = "none";
	}
}

function iniciar (){

	if(window.innerWidth > 850){
		formulario__login.style.display ="block";
		contenedor__formulario__login__registro.style.left = "10px";
		formulario__registro.style.display = "none";
	}else{
		formulario__login.style.display ="block";
		contenedor__formulario__login__registro.style.left = "0px";
		formulario__registro.style.display = "none";
		caja__fondo__login.style.display = "none";
		caja__fondo__registro.style.display = "block";
	}
}



