<?php
    namespace Controllers;
    //require_once("../models/Persona.php");
    
    use Models\Persona;

    class Cliente extends Persona{

        protected $fltCredito;

        function __construct(int $dpi, string $nombre, int $edad){
            parent::__construct($dpi, $nombre, $edad);
        }

        public function setCredito(string $credito){
            $this->fltCredito = $credito;
        }

        public function getCredito():float{
            return $this->fltCredito;
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

    }//End class Cliente
?>