<?php 
// soma
$valor1 = 5;
$valor2 = 3;
$resultado = $valor1 + $valor2;
echo $resultado; // Saída: 8

// subtração
$valor1 = 10;
$valor2 = 4;
$resultado = $valor1 - $valor2;
echo $resultado; // Saída: 6

//Multiplicação
$valor1 = 7;
$valor2 = 2;
$resultado = $valor1 * $valor2;
echo $resultado; // Saída: 14


//Divisão
$valor1 = 8;
$valor2 = 2;
$resultado = $valor1 / $valor2;
echo $resultado; // Saída: 4

// resto da divisão

$valor1 = 10;
$valor2 = 3;
$resultado = $valor1 % $valor2;
echo $resultado; // Saída: 1

//Exponenciação
$base = 2;
$expoente = 3;
$resultado = $base ** $expoente;
echo $resultado; // Saída: 8

//Operações com variaveis
$altura = 180;
$peso = 75;
$imc = $peso / (($altura / 100) ** 2);
echo "Seu IMC é: " . $imc;
