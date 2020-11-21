<?php
    require_once '../models/preguntas.php';
    require_once '../data/preguntasdb.php';
    if(strtoupper($_SERVER['REQUEST_METHOD'])=== 'POST') {
        $pregunta = new Preguntas();
        $pregunta->setId(0);
        $pregunta->setPregunta($_POST['pregunta']);
        $pregunta->setUsuario($_POST['correo']);
        $bd = new Preguntasdb();
        $bd->insertarPregunta($pregunta);
    }
?>