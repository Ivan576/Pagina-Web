<?php
    require_once '../Php/models/preguntas.php';
    require_once '../Php/data/preguntasdb.php';

    class Seleccionar{
        public function Selec(){
            $bd = new Preguntasdb();
            $preguntas = $bd->seleccionarPregunta();
            return $preguntas;
        }
    }
    
?>