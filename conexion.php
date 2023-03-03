<?php
require 'config.php';
$conector = new mysqli($servidor,$usuario,$password,$basededatos);
if($conector->connect_error){
	echo "No se conecto la base de datos";
}/*else{
	echo "Conectado a la base de datos";
}*/

?>