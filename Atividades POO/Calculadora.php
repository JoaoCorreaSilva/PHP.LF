<?php

class Calculadora {

    public static function adicao($num1, $num2) {
        return $num1 + $num2;
    }

    public static function subtracao($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiplicacao($num1, $num2) {
        return $num1 * $num2;
    }

    public static function divisao($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Erro: Divisão por zero.";
        }
    }
}


$num1 = 10;
$num2 = 2;

echo "Adição: " . Calculadora::adicao($num1, $num2) . "<br>";
echo "Subtração: " . Calculadora::subtracao($num1, $num2) . "<br>";
echo "Multiplicação: " . Calculadora::multiplicacao($num1, $num2) . "<br>";
echo "Divisão: " . Calculadora::divisao($num1, $num2) . "<br>";


$num3 = 5;
$num4 = 2;

echo "Divisão por zero: " . Calculadora::divisao($num3, $num4) . "<br>";

?>
