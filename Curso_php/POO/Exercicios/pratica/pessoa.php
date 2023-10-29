<?php
class Pessoa {
    // Propriedades privadas
    private $nome;
    private $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método getter para o nome
    public function getNome() {
        return $this->nome;
    }

    // Método setter para o nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Método getter para a idade
    public function getIdade() {
        return $this->idade;
    }

    // Método setter para a idade
    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

// Criando um objeto da classe Pessoa
$pessoa = new Pessoa("Isaac", 18);

// Obtendo o nome e a idade usando getters
echo "Nome: " . $pessoa->getNome() .PHP_EOL;
echo "Idade: " . $pessoa->getIdade() .PHP_EOL;

// Alterando o nome e a idade usando setters
$pessoa->setNome("Kapela");
$pessoa->setIdade(20);

// Obtendo os novos valores usando getters
echo "Novo Nome: " . $pessoa->getNome() .PHP_EOL;
echo "Nova Idade: " . $pessoa->getIdade() .PHP_EOL;
