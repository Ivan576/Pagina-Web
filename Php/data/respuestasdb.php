<script type="text/javascript" src="../../JS/actions.js"></script>

<?php
    require_once 'conexion.php';
    class Respuestasdb{
        public function insertarRespuesta($respuesta){
            try {    
                $pdo = Conexion::getInstancia()->conectar();
                $sql = "INSERT INTO respuestas (id,id_pregunta,usuario,respuesta) values(?,?,?,?)";
                
                $query = $pdo->prepare($sql);
                $query ->bindParam(1, $respuesta->getId());
                $query ->bindParam(2, $respuesta->getIdPregunta());
                $query ->bindParam(3, $respuesta->getUsuario());
                $query ->bindParam(4, $respuesta->getPregunta());

                $resultado = $query->execute();
                if($resultado){
                    echo "<script>
                            location.href='../../html/Preguntas.php';
                        </script>";
                }else{
                    echo "Erro al registrar";
                }
            } catch (PDOException $e){
                echo "Error al insetar respuesta ". $e;
            }
        }

        public function seleccionarRespuesta(){
            try {
                $pdo = Conexion::getInstancia()->conectar();
                $sql = "SELECT * FROM respuestas";

                $query = $pdo->prepare($sql);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                if ($respuestas = $query->fetchAll()) {
                    return $respuestas;
                }
            } catch (PDOException $e) {
                echo "Error al consultar respuesta " . $e;
            }
        }
    }
?>