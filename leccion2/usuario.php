<?php
    require_once("classUsuario.php");

    $objUsuarioUno = new Usuario("Emiliano Vázquez Banda","aoe2_emi@gmail.com","Admin");
    $objAndrea = new Usuario("Andrea Aranda","andrea@gmail.com","Cliente");

    echo $objUsuarioUno->getPerfil() . "<br>";
    echo $objAndrea->getPerfil() . "<br>";

    $objAndrea->setCambiarClave("jajajxd");

    echo $objAndrea->getPerfil() . "<br>";

?>