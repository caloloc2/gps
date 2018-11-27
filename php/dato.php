<?php

//$respuesta['estado'] = false;

try{
    require 'meta.php';

    $dato = Meta::Consulta("SELECT * FROM registros ORDER BY id_registro DESC LIMIT 1");

    if (count($dato)>0){
        $respuesta = $dato;    
    }

    //$respuesta['estado'] = true;

}catch(Exception $e){
    //$respuesta['error'] = $e->getMessage();
}

echo json_encode($respuesta);