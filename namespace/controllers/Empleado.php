<?php
    namespace Controllers;
    //require_once("../models/Persona.php");
    
    use Models\Persona;

    class Empleado extends Persona{

        protected $strPuesto;

        function __construct(int $dpi, string $nombre, int $edad){
            parent::__construct($dpi, $nombre, $edad);
        }

        public function setPuesto(string $puesto){
            $this->strPuesto = $puesto;
        }
        
        public function getPuesto():string{
            return $this->strPuesto;
        }

        public function setMensaje(string $mensaje){
            $this->mensaje = $mensaje;
        }
        
        public function getMensaje():string{
            return $this->mensaje . " " . $this->strNombre;
        }

        public function getDatosPersonales():string{
            $datos = "
                <h2>Datos personales</h2>
                DPI: {$this->intDpi} <br>
                Nombre: {$this->strNombre} <br>
                Edad: {$this->intEdad} <br>
            ";

            return $datos;
        }

    }//End class Empleado
?>