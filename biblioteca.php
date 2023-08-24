<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
<?php foreach ($listaAlunos as $Aluno) : ?>

<tr>

    <td><?=$Aluno["ID"] ?></td>

    <td><?=$Aluno["nome"] ?></td>

    <td><?=$Aluno["email"] ?></td>

    <td><?=$Aluno["telefone"] ?></td>

    <td><?=$Aluno["dataNascimento"] ?></td>

    <td><?=$Aluno["cpf"] ?></td>

    <td><?=$Aluno["celular"] ?></td>

</tr>

<?php endforeach; ?>

</table>

<hr>

</tbody>

<h1>Detalhes do Livro</h1>

<table border="1">

    <tr>

        <th>ID</th>

        <th>Nome do Livro</th>

        <th>Autor</th>

        <th>Data de Empréstimo</th>

        <th>Data de Devolução</th>

    </tr>
</table>
    </thead>
</body>
</html>