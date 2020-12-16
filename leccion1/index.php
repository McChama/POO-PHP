<?php
    require_once("classOperacion.php");

    $operacion1 = new Operacion(10,2);
    $operacion2 = new Operacion(100,3);

    $totalSuma = $operacion1->getSuma();
    echo "Total suma: " . $totalSuma . "<br>";

    $totalSuma = $operacion1->getResta();
    echo "Total resta: " . $totalSuma . "<br>";

    $totalSuma = $operacion1->getMultiplicacion();
    echo "Total multi: " . $totalSuma . "<br>";

    $totalSuma = $operacion1->getDivision();
    echo "Total division: " . $totalSuma . "<br>";
    echo "<br>";

    $totalSuma = $operacion2->getSuma();
    echo "Total suma: " . $totalSuma . "<br>";

    $totalSuma = $operacion2->getResta();
    echo "Total resta: " . $totalSuma . "<br>";

    $totalSuma = $operacion2->getMultiplicacion();
    echo "Total multi: " . $totalSuma . "<br>";

    $totalSuma = $operacion2->getDivision();
    echo "Total division: " . $totalSuma . "<br>";
    echo "<br>"
?>