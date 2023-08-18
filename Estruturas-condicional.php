<?php 

$nome = "Aarao Abbate";
$email = "aaraoabbate@gmail.com";
$senha = "12345678";
$idade = 22;

echo "<h1>Estrutura Condicional</h1>";
///////////////////////////////////////////////////////////////////////////////
echo "<hr>";

echo "<h5> Exemplo de if() </h5>";

if($idade >= 18)
{
    echo "O usuario $nome é maior de idade";
}
///////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e Else </h5>";

if($senha == 12345678){
    echo "A senha é válida!";
}else{
    echo "Senha Inválida!";
}

///////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e ElseIf else </h5>";

if($idade <= 18){
    echo "Jovem";
}else if($idade <= 21){
    echo "Adulto";
}else{
    echo "velho";
}

///////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if ternario </h5>";

echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

///////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de condição para formulario de login </h5>";

if($email == "aaraoabbate@gmail.com" && $senha == "12345678"){
    echo "Usuário autenticado";
}else{
    echo "Usuário ou Senha inválido!";
}

///////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> verificar se o número é par ou impar </h5>";

$numero = 10;

if($numero % 2 == 0){
    echo "O numero $numero é par";
}else{
    echo "O numero é impar";
}

///////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Mostre o dia da semana </h5>";

$diaSemana = date('w');

if($diaSemana == 0){
    echo "Domingo";
}else if($diaSemana == 1){
    echo "segunda";
}else if($diaSemana == 2){
    echo "terça";
}else if($diaSemana == 3){
    echo "quarta";
}else if($diaSemana == 4){
    echo "quinta";
}else if($diaSemana == 5){
    echo "sexta";
}else{
    echo "sabado";
}

    






