<?php
    require_once '../models/respuestas.php';
    require_once '../data/respuestasdb.php';
    if(strtoupper($_SERVER['REQUEST_METHOD'])=== 'POST') {
        $respuesta = new Respuestas();
        $respuesta->setId(0);
        $respuesta->setIdPregunta($_POST['idpregunta']);
        $respuesta->setPregunta($_POST['respuesta']);
        $respuesta->setUsuario($_POST['correorespuesta']);
        $bd = new Respuestasdb();
        $bd->insertarRespuesta($respuesta);
    }
?>