<script type="text/javascript" src="../../JS/actions.js"></script>

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
                            location.href='../../html/Preguntas.php';
                        </script>";
                }else{
                    echo "Erro al registrar";
                }
            } catch (PDOException $e){
                echo "Error al insetar pregunta". $e;
            }
        }

        public function seleccionarPregunta(){
            try {
                $pdo = Conexion::getInstancia()->conectar();
                $sql = "SELECT * FROM preguntas";

                $query = $pdo->prepare($sql);
                $query->setFetchMode(PDO::FETCH_ASSOC);
                $query->execute();
                if ($preguntas = $query->fetchAll()) {
                    return $preguntas;
                }
            } catch (PDOException $e) {
                echo "Error al insetar pregunta". $e;
            }
        }
    }
?>