<?php

//Configuracion base de datos
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'petsqr_bd');

$con = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
mysql_select_db(DB_DATABASE, $con);


$conexion=mysql_connect("localhost","root","") or
die("Problemas en la conexion");


mysql_select_db("petsqr_bd",$conexion) or
die("Problemas con la configuracion de la base de datos");


?>