<?php

include("config.php");	

	$conexion=mysql_connect("localhost","root","") or
	die("Problemas en la conexion");	
	
	//Variables del formulario
	$v_usu_ident = $_POST['usu_ident'];	
	$v_usu_nombre = $_POST['usu_nombre'];
	$v_usu_apellido = $_POST['usu_apellido'];
	$v_usu_ciudad = $_POST['usu_ciudad'];
	$v_usu_barrio = $_POST['usu_barrio'];
	$v_usu_direccion = $_POST['usu_direccion'];
	$v_usu_telefono = $_POST['usu_telefono'];
	$v_usu_email = $_POST['usu_email'];
	$v_usu_pass = $_POST['usu_pass'];
	$v_usu_pass2 = $_POST['usu_pass2'];	
	
	//Se guarda el resultado de la consulta en la variable Sql
	$v_consulta_existe = "SELECT usu_ident, usu_nombre, usu_apellido FROM usuarios WHERE usu_ident = ".$v_usu_ident ;	
	$v_busqueda = mysql_query($v_consulta_existe, $conexion)or
	die("Problemas en el select = ".mysql_error());	
	// Si existen registros se guardan en la variables de nombre y apellido si no se llena la variable con vacio
	if($row = mysql_fetch_array($v_busqueda)){
		$v_usu_ident_busqueda = $row["usu_ident"];
		$v_usu_nombre_busqueda = $row["usu_nombre"];
		$v_usu_apellido_busqueda = $row["usu_apellido"];
	}	
	else
	{
		$v_usu_ident_busqueda = "";
		$v_usu_nombre_busqueda = "";
		$v_usu_apellido_busqueda = "";
	}
			
	
	if ($v_usu_ident_busqueda != "" )
	{		
		//echo 'Ya existe un registro con el numero de identificacion '.$v_usu_ident_busqueda.' a nombre de '.$v_usu_nombre_busqueda.' '.$v_usu_apellido_busqueda.' <br><meta http-equiv="Refresh" content="7;URL=../" />';
		$field = 'Ya existe un registro con el numero de identificacion '.$v_usu_ident_busqueda.' a nombre de '.$v_usu_nombre_busqueda.' '.$v_usu_apellido_busqueda.' ';
		echo $field ;
	}
	else
	{		
		mysql_query("INSERT INTO usuarios(	usu_ident,
											usu_nombre,
											usu_apellido,
											usu_ciudad,
											usu_barrio,
											usu_direccion,
											usu_telefono,
											usu_email,
											usu_pass,
											usu_pass2
										) 
								 VALUES (	'$v_usu_ident',
											'$v_usu_nombre', 
											'$v_usu_apellido',
											'$v_usu_ciudad',
											'$v_usu_barrio',
											'$v_usu_direccion',
											'$v_usu_telefono',
											'$v_usu_email',
											'$v_usu_pass',
											'$v_usu_pass2'
										)",
					$conexion) or
		die("Problemas en el select = ".mysql_error());		
		echo 'El usuario ha sido registrado<br><meta http-equiv="Refresh" content="2;URL=../" />';
		mysql_close($conexion);		
	}	
	
	
	
	/*
	
	mysql_query("INSERT INTO usuarios(	usu_ident,
										usu_nombre,
										usu_apellido,
										usu_ciudad,
										usu_barrio,
										usu_direccion,
										usu_telefono,
										usu_email,
										usu_pass,
										usu_pass2
									) 
							 VALUES (	$v_usu_ident,
										'$v_usu_nombre', 
										'$v_usu_apellido',
										'$v_usu_ciudad',
										'$v_usu_barrio',
										'$v_usu_direccion',
										'$v_usu_telefono',
										'$v_usu_email',
										'$v_usu_pass',
										'$v_usu_pass2'
									)",
				$conexion) or
	die("Problemas en el select = ".mysql_error());

	//echo "Datos enviados correctamente";
	echo 'Tu usuario ha sido registrado<br><meta http-equiv="Refresh" content="2;URL=../" />';
	mysql_close($conexion);
	
	*/
?>