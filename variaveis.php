<?php

$nomeCompleto = "Aarao Abbate";
$idade = 22;
$status = true;
$salario = 1.500;

echo $nomeCompleto;

echo "<hr>";     // Acrescenta uma linha na horizontal

echo strtoupper($nomeCompleto); // converte o texto em maisculas

echo "<hr>"; 

echo strtolower($nomeCompleto); // converte o texto em minusculas

echo "<hr>"; 
echo ucwords($nomeCompleto); // converte a primeira letra em maiuscula
echo "<hr>"; 
echo str_replace("Aarao", "joao", $nomeCompleto); // substitui uma string  por outra (localiza ), (altera),(onde) nessa ordem.
echo "<hr>"; 
echo str_repeat("Abbate",5); // repete o que foi escrito 5 vezes.
echo "<hr>"; 
echo isset($nome) ?'true': 'false'; // verifica se a variavel(nome) existe, quaso exista retorna (true) caso não exista retorna (false)
echo "<hr>"; 
echo empty($nomeCompleto) ? 'true': 'false'; //preenche se a variavel esta vazia 



