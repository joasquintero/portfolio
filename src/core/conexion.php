<?php
class Conexion{
#### PROPIEDADES ####
protected $conn;
#### METODOS ####
    function __construct(){
        $user = 'root';
        $pass = '';
        $db = 'morbilidad';
        try{
            $this->conn = new PDO("mysql:host=127.0.0.1;charset=utf8;dbname=$db",$user,$pass);
            //echo 'conectado';
		}catch (PDOException $e) {
            echo("Problema de conexion: " . "<h4><b>" . $e->getMessage() . "</b></h4>");
		}
    }
     function __destruct() {
        $this->conn=NULL;
    }  
}

