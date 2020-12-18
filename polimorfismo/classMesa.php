<?php
    require_once("classMueble.php");

    final class Mesa extends Mueble{
        
        private $strForma = "";
        protected $strTamanio;
        public $strEstatus = "Activo";

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio)
        {
            parent::__construct($descripcion, $precio, $marca, $color, $material);
            $this->strTamanio = $tamanio;
        }

        public function setForma(string $forma){
            $this->strForma = $forma;
        }

        public function getForma():string{
            return $this->strForma;
        }

        public function getInfoProducto(){
            $arrProducto = array('Producto' => $this->strDescripcion,
                                'Precio' => $this->fltPrecio,
                                'Stock_minimo' => $this->intStockMinimo,
                                'Estado' => $this->strEstatus,
                                'Color' => $this->strColor,
                                'Material' => $this->strMaterial,
                                'Tamaño' => $this->strTamanio,
                                'Forma' => $this->strForma
            );

            return $arrProducto;
        }

    }
?>