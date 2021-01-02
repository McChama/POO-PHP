<?php
    // require_once("../controllers/Empleado.php");
    // require_once("../controllers/Cliente.php");
    // require_once("../controllers/Persona.php");
    require_once("../autoload.php");
    use Controllers\Empleado;
    use Controllers\Cliente;
    use Controllers\Persona;

    $objEmpleado = new Empleado(78978, "Emiliano Vázquez Banda", 21);
    $objEmpleado->setPuesto("Administrador");
    $objEmpleado->setMensaje("Bienvenido empleado ");

    
    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: " . $objEmpleado->getPuesto();
    echo "<br>" . $objEmpleado->getMensaje();

    echo "<br>";
    echo "<br>";

    $objCliente = new Cliente(55555, "Cliente No 2", 2);
    $objCliente->setCredito(300);
    $objCliente->setMensaje("Bienvenido cliente ");

    
    echo $objCliente->getDatosPersonales();
    echo "Credito: " . $objCliente->getCredito();
    echo "<br>" . $objCliente->getMensaje();

    echo "<br>";
    $mensaje = new Persona();
    echo $mensaje->Saludar();

?>