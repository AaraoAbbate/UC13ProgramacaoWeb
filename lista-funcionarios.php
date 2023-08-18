<?php

include "funcionario.php";

?>

<html>

<head>
    <title>Lista de funcionarios</title>
</head>

<body>
    <h1>Lista de funcionarios</h1>

    <table border="1">
        <thead>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ação</th>

            </tr>
        </thead>

        <body>
            <?php foreach($listaFuncionarios as $funcionario): ?>

            <tr>
                <td><?=$funcionario["ID"] ?> </td>
                <td><?=$funcionario["nome"] ?></td>
                <td><?=$funcionario["email"] ?></td>
                <td><?=$funcionario["telefone"] ?></td>
                <td>Editar Visualizar excluir</td>
            </tr>
            <?php endforeach; ?>

        </body>
        <tfoot>

            <tr>

                <td colspan="5">Foi encontrado 5 funcionarios cadastrados
            </tr>
            </tr>
        </tfoot>
    </table>
</body>

</html>