<?php
    class Producto{
        public $strDescripcion;
        public $fltPrecio;
        protected $intStockMinimo = 10;
        protected $strEstatus = "Activo";

        public function __construct(string $descripcion, float $precio){
            $this->strDescripcion = $descripcion;
            $this->fltPrecio = $precio;
        }

        public function getInfoProducto(){
            $arrProducto = array('Producto' => $this->strDescripcion,
                                'Precio' => $this->fltPrecio,
                                'Stock_minimo' => $this->intStockMinimo,
                                'Estado' => $this->strEstatus
            );

            return $arrProducto;
        }

    }//end class Producto
?>