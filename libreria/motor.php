<?php
include ("conexion.php");

//--config.php--
//define ('DB_HOST','localhost');
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
define ('DB_NAME','biblio_t1');


// Nombre de la session (puede dejar este mismo)
$usuarios_sesion="pwd";

//include ("estudiante.php");
//include ("libro_d.php");
$objConexion = new Conexion();
?>