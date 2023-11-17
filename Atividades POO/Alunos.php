<?php

class Aluno {
    
    public $matricula;
    public $nome;
    public $sexo;
    public $nascimento;
    public $endereco;

    public function cadastrar($matricula, $nome, $sexo, $nascimento, $endereco) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->nascimento = $nascimento;
        $this->endereco = $endereco;
    }
}
// aqui vou criar uma lista de alunos, e um método para "chamar" eles na tela sem ter que passar (aluno1, aluno2, aluno3....) lá no echo, clean code 👍
$alunos = array();

$aluno1 = new Aluno();
$aluno1->cadastrar(1020, "João Eduardo", "Masculino", "22/04/2004", "Rua Orquideas Amarelas, 821");
$alunos[] = $aluno1;

$aluno2 = new Aluno();
$aluno2->cadastrar(1021, "Matheus Aprijas", "Masculino", "08/09/2004", "Rua Orquideas Azuls, 964");
$alunos[] = $aluno2;

$aluno3 = new Aluno();
$aluno3->cadastrar(1022, "Grazi Elle", "Não Masculino", "12/05/2004", "Rua Orquideas Roxas, 274");
$alunos[] = $aluno3;

$aluno4 = new Aluno();
$aluno4->cadastrar(1023, "Luiza do vôlei", "Feminino", "07/03/2004", "Rua Orquideas Brancas, 461");
$alunos[] = $aluno4;

foreach ($alunos as $aluno) {
    echo "Matrícula: " . $aluno->matricula . "<br>";
    echo "Nome: " . $aluno->nome . "<br>";
    echo "Sexo: " . $aluno->sexo . "<br>";
    echo "Nascimento: " . $aluno->nascimento . "<br>";
    echo "Endereço: " . $aluno->endereco . "<br>";
    echo "<hr>";
}

?>
