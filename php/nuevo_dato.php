<?php 

try{
	
	require 'meta.php';

	$fecha = date('Y-m-d');
	$hora = date('H:i:s');

	$latitud = 0;
	$longitud = 0;
	$cantidad_pasos = 0;

	if ((isset($_GET['lat']))&&(isset($_GET['long']))&&(isset($_GET['cp']))){
		$latitud = $_GET['lat'];	
		$longitud = $_GET['long'];
		$cantidad_pasos = $_GET['cp'];

		$insertar = Meta::Nuevo_Registro($latitud, $longitud, $cantidad_pasos, $fecha, $hora);

		echo 'ok';
	}else{
		echo 'error, falta datos';
	}
}catch(Exception $e){
	echo $e->getMessage();
}
