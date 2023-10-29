<?php

class Ex_01
{
    public $idade = 0;

    public function pedirIdade()
    {
        echo "Digite a sua idade: ";
        $this->idade = (int) fgets(STDIN); // Lê a idade do usuário
    }
}

// Criar um objeto da classe Ex_01
$objetoEx01 = new Ex_01();

// Chamar o método para pedir a idade
$objetoEx01->pedirIdade();

// Exibir a idade inserida
echo "Sua idade é: " . $objetoEx01->idade . PHP_EOL;
