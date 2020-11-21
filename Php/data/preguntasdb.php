<?php
    require_once 'conexion.php';
    class Preguntasdb{
        public function insertarPregunta($pregunta){
            try {    
                $pdo = Conexion::getInstancia()->conectar();
                $sql = "INSERT INTO preguntas (id,usuario,pregunta) values(?,?,?)";
                
                $query = $pdo->prepare($sql);
                $query ->bindParam(1, $pregunta->getId());
                $query ->bindParam(2, $pregunta->getUsuario());
                $query ->bindParam(3, $pregunta->getPregunta());

                $resultado = $query->execute();
                if($resultado){
                    echo "<script>
                            location.href='../../html/Preguntas.html';
                        </script>";
                }else{
                    echo "Erro al registrar";
                }
            } catch (PDOException $e){
                echo "Error al insetar pregunta". $e;
            }
        }
    }
?>