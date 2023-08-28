<html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de Empréstimo</title>

</head>

<body>

    <div>

        <h1>Cadastro de Empréstimo</h1>

        <?php

        if (isset($_GET['success'])) {

            echo 'Cadastro de empréstimo foi feito com sucesso!';

        }

        ?>

        <form action="processar_cadastro_emprestimo.php" method="post">

         

            <label for="alunoId">ID do Aluno:</label><br>

            <input type="number" name="alunoId" id="alunoId" required>

            <br>

            <label for="livroId">ID do Livro:</label><br>

            <input type="number" name="livroId" id="livroId" required>

            <br>

         

            <label for="dataEmprestimo">Data de Empréstimo:</label><br>

            <input type="date" name="dataEmprestimo" id="dataEmprestimo" required>

            <br>

            <label for="dataDevolucao">Data de Devolução:</label><br>

            <input type="date" name="dataDevolucao" id="dataDevolucao" required><br>

            <br>

            <button type="submit">Cadastrar Empréstimo</button>

            <br>

        </form>

    </div>

</body>

</html>