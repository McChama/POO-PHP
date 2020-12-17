<?php
    require_once("classEmpleado.php");
    require_once("classCliente.php");

    $objEmpleado = new Empleado(78978, "Emiliano Vázquez Banda", 21);
    $objEmpleado->setPuesto("Administrador");

    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: ".$objEmpleado->getPuesto();

    $objCliente = new Cliente(77777, "Michelle Oliveira", 20);
    $objCliente->setCredito(500);

    echo $objCliente->getDatosPersonales();
    echo "Credito: ".$objCliente->getCredito();
?>