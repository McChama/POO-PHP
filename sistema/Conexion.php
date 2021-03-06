<?php

    class Conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "db_sistema";
        private $connect;

        public function __construct(){
            $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try{
                $this->connect = new PDO($connectionString,$this->user,$this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                $this->connect = "Error de conexion";
                echo "ERROR: ".$e->getMessage();
            }
        }

        public function connect(){
            return $this->connect;
        }

    }//end class Conexion

    

?>