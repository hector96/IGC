function ocultar() {
   document.getElementById('ocultar').style.display= "none";

}

function mostrar() {
   document.getElementById('ocultar').style.display= "block";

}
function validar(){
	var name=document.getElementById('nombre').value;
	if (name=="") {
		alert("por favor ingrese su nombre");
		return false;
	}
	var edad=document.getElementById('edad').value;
	if (edad=="") {
		alert("por favor ingrese su edad");
		return false;
	}
	var peso=document.getElementById('peso').value;
	if (peso=="") {
		alert("por favor ingrese su peso");
		return false;
}
	var altura=document.getElementById('altura').value;
	if (altura=="") {
		alert("por favor ingrese su altura");
		return false;
}
	var cintura=document.getElementById('cintura').value;
	if (cintura=="") {
		alert("por favor ingrese su cintura");
		return false;
}
	var cuello=document.getElementById('cuello').value;
	if (cuello=="") {
		alert("por favor ingrese su cuello");
		return false;
}
}