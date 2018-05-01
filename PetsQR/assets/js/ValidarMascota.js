function validarMasc() {
	var nombre;	
	var fecha_nacim;	
	var raza;
	var genero;
	var color;
	var dueno;			
	
	nombre = document.getElementById("nombre_masc").value
	fecha_nacim = document.getElementById("fecha_nacim").value
	raza = document.getElementById("raza").value
	genero = document.getElementById("genero").value
	color = document.getElementById("color").value
	dueno = document.getElementById("dueno").value
	
	
	if (nombre === "")
	{
		alert("El campo nombre de la mascota no puede estar vacio");
		return false;
	}
	
	else if (fecha_nacim === "")
	{
		alert("La fecha de nacimiento no puede estar vacia");
		return false;
	}
	else if (raza === "")
	{
		alert("El campo raza no puede estar vacio");
		return false;
	}
	else if (genero === "")
	{
		alert("El campo genero no puede estar vacio");
		return false;
	}
	else if (color === "")
	{
		alert("El campo color no puede estar vacio");
		return false;
	}
	else if (genero === "")
	{
		alert("El dueno genero no puede estar vacio");
		return false;
	}
	
	
	
}