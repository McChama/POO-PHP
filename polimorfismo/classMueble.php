<?php
    require_once("classProducto.php");

    class Mueble extends Producto{
        public $strColor;
        public $strMaterial;
        public $strEstatus = "Agotado";

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material){
            parent::__construct($descripcion, $precio);

            $this->strMaterial = $material;
            $this->strColor = $color;
        }

        public function getInfoProducto(){
            $arrProducto = array('Producto' => $this->strDescripcion,
                                'Precio' => $this->fltPrecio,
                                'Stock_minimo' => $this->intStockMinimo,
                                'Estado' => $this->strEstatus,
                                'Color' => $this->strColor,
                                'Material' => $this->strMaterial
            );

            return $arrProducto;
        }

    }//end class Mueble
?>