<?php

class Pessoa {

    public function classeEleitoral($idade) {
        if ($idade < 16) {
            return "Não votante";
        } elseif ($idade >= 16 && $idade < 18 || $idade > 65) {
            return "Eleitor facultativo";
        } else {
            return "Eleitor obrigatório";
        }
    }
}

$pessoa = new Pessoa();

$idade1 = 15;
$classeEleitoral1 = $pessoa->classeEleitoral($idade1);
echo "Para uma pessoa de $idade1 anos: $classeEleitoral1<br>";

echo "<br>"; 

$idade2 = 16;
$classeEleitoral2 = $pessoa->classeEleitoral($idade2);
echo "Para uma pessoa de $idade2 anos: $classeEleitoral2<br>";

echo "<br>";  

$idade3 = 18;
$classeEleitoral3 = $pessoa->classeEleitoral($idade3);
echo "Para uma pessoa de $idade3 anos: $classeEleitoral3<br>";

echo "<br>";  

$idade4 = 65;
$classeEleitoral4 = $pessoa->classeEleitoral($idade4);
echo "Para uma pessoa de $idade4 anos: $classeEleitoral4<br>";

echo "<br>"; 

$idade5 = 66;
$classeEleitoral5 = $pessoa->classeEleitoral($idade5);
echo "Para uma pessoa de $idade5 anos: $classeEleitoral5<br>";

echo "<br>";  

$idade6 = 70;
$classeEleitoral6 = $pessoa->classeEleitoral($idade6);
echo "Para uma pessoa de $idade6 anos: $classeEleitoral6<br>";

?>


