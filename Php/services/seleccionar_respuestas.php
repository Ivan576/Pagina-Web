<?php
    require_once '../Php/models/respuestas.php';
    require_once '../Php/data/respuestasdb.php';

    class SeleccionarRespuestas{
        public function Selec(){
            $bd = new Respuestasdb();
            $respuestas = $bd->seleccionarRespuesta();
            return $respuestas;
        }
    }
    
?>