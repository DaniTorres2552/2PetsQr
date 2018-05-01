function validarUsu(){
	var ident;	
	var nombre;	
	var apellido;
	var ciudad;
	var barrio;
	var direccion;
	var telefono;
	var correo;
	var pass1;
	var pass2;
	var expression;
	var modal = document.getElementById('modal-wrapper');
		
	ident = document.getElementById("ident").value	
	nombre = document.getElementById("nombre").value	
	apellido = document.getElementById("apellido").value
	ciudad = document.getElementById("ciudad").value
	barrio = document.getElementById("barrio").value
	direccion = document.getElementById("direccion").value
	telefono = document.getElementById("telefono").value
	correo = document.getElementById("correo").value
	pass1 = document.getElementById("pass1").value
	pass2 = document.getElementById("pass2").value
	
	
	if (ident === "" )
	{
		alert("El campo identificacion no puede estar vacio");
		return false;
	}
	else if (isNaN(ident))
	{
		alert("El campo identificacion debe ser numerico");
		return false;
	}	
	else if (nombre === "")
	{
		alert("El campo nombre no puede estar vacio");
		return false;
	}
	
	else if (apellido === "")
	{
		alert("El campo apellido no puede estar vacio");
		return false;
	}
	else if (ciudad === "")
	{
		alert("El campo ciudad no puede estar vacio");
		return false;
	}
	else if (barrio === "")
	{
		alert("El campo barrio no puede estar vacio");
		return false;
	}
	else if (direccion === "")
	{
		alert("El campo direccion no puede estar vacio");
		return false;
	}
	else if (telefono === "")
	{
		alert("El campo telefono no puede estar vacio");
		return false;
	}
	else if (correo === "")
	{
		alert("El campo correo no puede estar vacio");
		return false;
	}
	else if (pass1 === "")
	{
		alert("El campo contrasena no puede estar vacio");
		return false;
	}
	else if (pass2 === "")
	{
		alert("El campo contrasena 2 no puede estar vacio");
		return false;
	}
	else if (pass1 != pass2)
	{
		alert("El las contraseñas deben ser iguales");
		return false;
	}	
	
	window.onclick = function(event) {
		if (event.target == modal) 
		{
			modal.style.display = "none";
		}
	}

	
}