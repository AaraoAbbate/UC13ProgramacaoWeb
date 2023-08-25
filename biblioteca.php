<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Detalhes dos alunos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data Nascimento</th>
                <th>CPF</th>
                <th>Celular</th>
            </tr>
        </thead>
        <body>
            <?php include 'AtividadeAlexandra.php' //// ?>  <!-- pega um arquivo de fora-->
            <?php foreach ($listaAlunos as $Aluno) : ?>
                <tr>
                    <td><?= $Aluno["ID"] ?></td>
                    <td><?= $Aluno["nome"] ?></td>
                    <td><?= $Aluno["email"] ?></td>
                    <td><?= $Aluno["telefone"] ?></td>
                    <td><?= $Aluno["dataNascimento"] ?></td>
                    <td><?= $Aluno["cpf"] ?></td>
                    <td><?= $Aluno["celular"] ?></td>
                </tr>
               <?php endforeach;?>
        </body>
    </table>

    <hr>
    foreach 
    endforeach

    <h1>Lista de livros</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Livro</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Preço</th>
                <th>Número de Páginas</th>
                <th>ISBN</th>
            </tr>
        </thead>
</body>
            <?php foreach ($listaLivros as $livro) : ?>
                <tr>
                    <td><?= $livro['ID'] ?></td>
                    <td><?= $livro['nome'] ?></td>
                    <td><?= $livro['autor'] ?></td>
                    <td><?= $livro['anoPublicacao'] ?></td>
                    <td><?= $livro['preco'] ?></td>
                    <td><?= $livro['numeroDepaginas'] ?></td>
                    <td><?= $livro['isbn'] ?></td>
                </tr>
            <?php endforeach;?>
        </body>
    </table>
</body>
</html>

