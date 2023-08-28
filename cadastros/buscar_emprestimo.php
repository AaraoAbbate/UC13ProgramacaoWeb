<html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Buscar Empréstimos</title>

</head>

<body>

    <h1>Pesquisar Empréstimos</h1>

    <form action="" method="post">

        <label for="IDescrito">Digite o ID do Aluno:</label>

        <br>

        <input type="number" name="IDescrito" id="IDescrito">

        <br>

        <button type="submit">Buscar</button>

    </form>

 

    <?php

    if (isset($_POST['IDescrito']) && file_exists("AtividadeAlexandra.php")) {

        include "AtividadeAlexandra.php"; // Inclui o arquivo com os dados

        $alunoId = $_POST['IDescrito'];

 

        // Simula consulta à lista de alunos

        $alunoEncontrado = null;

        foreach ($listaAluno as $aluno) {

            if ($aluno['ID'] == $alunoId) {

                $alunoEncontrado = $aluno;

                break;

            }

        }

 

        if ($alunoEncontrado) {

    ?>

<hr>

        <h1>Detalhes do Aluno</h1>

        <table border="1">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Nome do Aluno</th>

                    <th>Email</th>

                    <th>Telefone</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td><?= $alunoEncontrado["ID"] ?></td>

                    <td><?= $alunoEncontrado["nome"] ?></td>

                    <td><?= $alunoEncontrado["email"] ?></td>

                    <td><?= $alunoEncontrado["telefone"] ?></td>

                </tr>

            </tbody>

        </table>

        <hr>

        <h1>Detalhes dos Livros</h1>

        <table border="1">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Nome do Livro</th>

                    <th>Autor</th>

                    <th>Data de Empréstimo</th>

                    <th>Data de Devolução</th>

                </tr>

            </thead>

            <tbody>

            <?php

                foreach ($listaLivro as $livro) {

                    if ($livro["ID"] == $alunoId) {

                ?>

                        <tr>

                            <td><?= $livro["ID"] ?></td>

                            <td><?= $livro["titulo"] ?></td>

                            <td><?= $livro["autor"] ?></td>

                            <td><?= $livro["DataEmprestimo"] ?></td>

                            <td><?= $livro["DataDevolucao"] ?></td>

                        </tr>

                <?php

                    }

                }

            ?>

            </tbody>

        </table>

    <?php

        } else {

            echo "<p>Nenhum empréstimo encontrado para o ID do aluno $alunoId.</p>";

        }

    }

    ?>

</body>

</html>