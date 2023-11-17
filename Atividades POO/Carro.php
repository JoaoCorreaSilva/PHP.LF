<?php

class Carro {
    public $nome;

    public function ligar() {
        echo $this->nome . " está ligado.<br>";
    }

    public function desligart() {
        echo $this->nome . " está desligando.<br>";
    }
}

$carro1 = new Carro();
$carro1->nome = "Uninho";

$carro2 = new Carro();
$carro2->nome = "Up";

$carro1->ligar();
echo "<br>";
$carro2->ligar();

echo "<br>";

$carro1->desligart();
echo "<br>";
$carro2->desligart();

?>
