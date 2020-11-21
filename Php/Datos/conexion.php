<?php
//conexion.php
require_once 'db.php';

//clase para crear la conexion con la base de datos
class Conexion{
    private static $bd = null;
    private static $pdo;

    function __construct(){
        try{
            self::conectar();
        }catch(PDOException $e){
          echo "<h2>Error en la conexion con la base de datos.</h2>" . $e;
        }
    }
    public function conectar(){
        if(self::$pdo == null){
           self::$pdo = new PDO(
               'mysql:dbname=' . NOMBRE_BD .
               ':host=' . HOST . ':' .
               USUARIO,
               PASSWORD,
               array(PDO::MYSQL ATTR INIT COMMAND -> 'SET NAMES utf8')
           );
           //Habilitamos exception
           self::$pdo->setAttribute(PDO::ATTR:ERRMODE. PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
    public static function getInstancia(){
        if(self::$bd == null){
            self::$bd = new self();
        }
        return self::$bd;
    }

    function __destruct(){
        self::$pdo = null;
    }
}
?>