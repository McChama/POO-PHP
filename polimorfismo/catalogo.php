<?php
    require_once("classMesa.php");

    $objCama = new Producto("Cama",10500);
    $arrInfoProducto = $objCama->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('</pre>');

    $objMueble = new Mueble("Closet",10500,"jajajanoc una marca de mueble", "Café", "Madera");
    $arrInfoProducto = $objMueble->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('</pre>');

    $objMesa = new Mesa("Nesa de noche",800,"Nochesita","Negro","Metal","4 personas");
    $objMesa->setForma("Redonda");
    $arrInfoProducto = $objMesa->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('</pre>');

?>