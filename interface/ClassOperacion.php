<?php

    require_once("Operacion.php");
    require_once("OperacionesBasicas.php");

    class Calcular implements Operacion, OperacionBasica{

        public function raizCuadrada(float $numero): float
        {
            $total = sqrt($numero);
            return $total;
        }

        public function potencia(int $numero, int $potencia): int
        {
            $total = pow($numero, $potencia);
            return $total;
        }

        public function opBasica(float $num1, float $num2, string $operacion)
        {
            switch($operacion){
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = "Operacion no valida";
            }

            return $result;
        }


    }

?>