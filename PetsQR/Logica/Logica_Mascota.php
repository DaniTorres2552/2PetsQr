<?php

include("config.php");

	$conexion=mysql_connect("localhost","root","") or
	die("Problemas en la conexion");
						
	//Variables del formulario
	$v_masc_nombre = $_POST['masc_nombre'];
	$v_masc_edad = $_POST['masc_edad'];
	$v_masc_raza = $_POST['masc_raza'];
	$v_masc_genero = $_POST['masc_genero'];
	$v_masc_color = $_POST['masc_color'];	
	$v_masc_id_dueno = $_POST['masc_id_dueno'];	
		
	mysql_query("INSERT INTO mascotas(	masc_nombre,
										masc_edad,
										masc_raza,
										masc_genero,
										masc_color,
										masc_id_dueno										
									) 
							 VALUES (	'$v_masc_nombre',
										'$v_masc_edad',
										'$v_masc_raza',
										'$v_masc_genero',
										'$v_masc_color',
										'$v_masc_id_dueno'
										
									)",
				$conexion) or
	die("Problemas en el select = ".mysql_error());

	//echo "Datos enviados correctamente";
	echo 'Tu mascota ha sido registrada<br><meta http-equiv="Refresh" content="1;URL=../" />';
	mysql_close($conexion);




?>