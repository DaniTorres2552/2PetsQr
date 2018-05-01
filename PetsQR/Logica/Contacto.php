<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="uft-8">  
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<form action="Contacto.php" method="post">

		<div id="wrapper">

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Formulario de contacto</h1>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-bar-chart-o fa-fw"></i> Formulario de Busqueda
							</div>

							<div class="panel-body">


								<div class="form-group">
									<label for="identificacion">Identificacion</label>
									<input type="text" class="form-control" name="identificacion" placeholder="Enter ID">
								</div>

								<div class="form-group">
									<label for="Nombre">Nombre</label>
									<input type="text" class="form-control" name="nombre" placeholder="Enter Name">
								</div>

								<div class="form-group">
									<label for="Apellido">Apellido</label>
									<input type="text" class="form-control" name="apellido" placeholder="Enter LastName">
								</div>

								<div class="form-group">
									<label for="direccion">Direccion</label>
									<input type="text" class="form-control" name="direccion" placeholder="Enter Address">
								</div>

								<div class="form-group">
									<label for="telefono">Telefono</label>
									<input type="text" class="form-control" name="telefono" placeholder="Enter Telephone">
								</div>

								<?php
								$conexion=mysql_connect("localhost","root","") or
								die("Problemas en la conexion");

								mysql_select_db("base1",$conexion) or
								die("Problemas en la seleccion de la base de datos");

								mysql_query("insert into formulario(identificacion,nombre,apellido,direccion,telefono) values ('$_REQUEST[identificacion]', '$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[direccion]','$_REQUEST[telefono]')", $conexion) or
								die("Problemas en el select = ".mysql_error());

								mysql_close($conexion);

								
							    
							    echo 'Tu usuario ha sido registrado<br><meta http-equiv="Refresh" content="2;URL=./" />';

								echo "<hr>";

								?>

								<button type="submit" class="btn btn-primary"> Enviar </button>
								
								<a class="btn btn-default" href="FormContacto.php" role="button">Formulario de Ingreso</a>
                				<a class="btn btn-default" href="FormConsultar.php" role="button">Consultar Datos de las Personas</a>
                				<a class="btn btn-default" href="FormEliminar.php" role="button">Eliminar por Identificacion</a>
                				<a class="btn btn-default" href="FormModifica.php" role="button">Modifica por Identificacion</a>


							</div>
						</div>  
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>