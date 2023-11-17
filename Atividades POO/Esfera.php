<?php

class Esfera {

    public static function calcularVolume($raio) {
        $pi = 3.14;
        $volume = (4/3) * $pi * pow($raio, 3);
        return $volume;
    }
}

$raioEsfera = 3;

$volume = Esfera::calcularVolume($raioEsfera);

echo "O volume da esfera com raio $raioEsfera é: $volume unidades cúbicas.";

?>
