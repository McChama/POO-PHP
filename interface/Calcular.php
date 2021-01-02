<?php

    require_once("ClassOperacion.php");

    $objRaiz = new Calcular();
    
    echo $objRaiz->raizCuadrada(9);
    echo "<br>";
    echo $objRaiz->potencia(4,3);

    echo "<br>";
    echo $objRaiz->opBasica(50,2,"+");

?>