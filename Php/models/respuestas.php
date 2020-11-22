<?php
    class Respuestas {
        private $Id;
        private $IdPregunta;
        private $Usuario;
        private $Pregunta;
    

        public function setId($Id){
            $this->Id = $Id;
        }

        public function getId(){
            return $this->Id;
        }

        public function setIdPregunta($IdPregunta){
            $this->IdPregunta = $IdPregunta;
        }

        public function getIdPregunta(){
            return $this->IdPregunta;
        }

        public function setUsuario($Usuario){
            $this->Usuario = $Usuario;
        }

        public function getUsuario(){
            return $this->Usuario;
        }

        public function setPregunta($Pregunta){
            $this->Pregunta = $Pregunta;
        }
        
        public function getPregunta(){
            return $this->Pregunta;
        }
    }
?>