<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <h1>Informações do livro</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $valor = $_POST["valor"]; 
        $Npaginas = $_POST["Npaginas"];
        $anoPublic = $_POST["anoPublic"];   
    }
    ?>
    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>valor</th>
            <th>Numero de paginas</th>
            <th>ano publicação</th>
            <!-- ... outros cabeçalhos de coluna ... -->
        </tr>
        <tr>
            <td><?php echo $titulo; ?></td>
            <td><?php echo $autor; ?></td>
            <td><?php echo $valor; ?></td>
            <td><?php echo $Npaginas; ?></td>
            <td><?php echo $anoPublic; ?></td>
        </tr>
    </table>
    <?php

