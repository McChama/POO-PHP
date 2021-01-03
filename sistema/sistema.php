<?php
    require_once("autoload.php");

    $objUsuario = new Usuario();

    //Insertar Usuario
    //$insert = $objUsuario->insertUsuario("Jana Arellano",3123334444,"jana@mail.com");
    //echo $insert;

    //Extrae los registros
    $users = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");

    $updateUsuario = $objUsuario->updateUsuario(2,"Rafael Alejando",311111,"rafa@gmail.com");
    echo $updateUsuario;

    $user = $objUsuario->getUsuario(4);
    print_r("<pre>");
    print_r($user);
    print_r("</pre>");

    $delete = $objUsuario->deleteUsuario(2);
    echo $delete;

?>