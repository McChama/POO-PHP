<?php
    class Persona{

        public $intDpi;
        public $strNombre;
        public $intEdad;

        function __construct(int $dpi, string $nombre, int $edad){
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
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
    }//End class Persona
?>