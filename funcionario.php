<?php

$listaFuncionarios = [ //atribuiçao dentro de array usa =>
    [
        "ID" => 1,
        "nome" => "Edson Rodrigues",
        "email" => "edson@teste.com",
        "telefone" => "(14) 9999-999"
    ],
    [
        "ID" => 2,
        "nome" => "Alexandra",
        "email" => "Alexandra@teste.com",
        "telefone" => "(13) 9999-999"
    ],
    [
        "ID" => 3,
        "nome" => "Rafael Naoki",
        "email" => "Rafael@teste.com",
        "telefone" => "(14) 9999-4444"
    ],
    [
        "ID" => 4,
        "nome" => "Miguel Perez",
        "email" => "Miguel@teste.com",
        "telefone" => "(14) 6666-999"
    ],
];


$qtdFuncionario = count($listaFuncionarios); //mostra quantidades de elementos no array principal
//Adicionando um item no array pronto
$listaFuncionarios[$qtdFuncionario]["ID"] =5;
$listaFuncionarios[$qtdFuncionario]["nome"] = "João";
$listaFuncionarios[$qtdFuncionario]["email"]= "joao@teste.com";
$listaFuncionarios[$qtdFuncionario]["telefone"] = "(14)777-777";

//var_dump($listaFuncionarios);