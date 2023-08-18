<?php
//atribui valores
$listaCompra = ["Arroz","feijão","ovo","picanha"];
//print_r depurar
print_r ($listaCompra); // ja contem o "echo" não precisa escrever antes para imprimir 

var_dump($listaCompra); // segunda forma de depurar utilizando

echo "<hr>";

echo $listaCompra[2]; //seleciona a posição e imprime o que esta dentro.

echo "<hr>";

foreach($listaCompra as $item){
    echo $item. " - "; //faz o laço de repetição e imprime todos os itens dento do array
}


echo "<hr>";

$listaCompra[] = "Oleo"; // acrescenta coisas dentro do array

foreach($listaCompra as $indice => $item){
    echo $indice. " - ".$item. ","; //
}