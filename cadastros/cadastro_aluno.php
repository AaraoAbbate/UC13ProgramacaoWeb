

<html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>cadastro de aluno</title>    

</head>

<body>

    <div>

    <h1>Cadastro De Livro</h1>

    <?php

        if (isset($_GET['success'])) {

            echo 'Cadastro foi feito com sucesso!';

        }

        ?>

    <form action="processar_cadastro.php" method="post">

    <label for="titulo">Título:</label>

        <br>

        <input type="text" name="titulo" id="titulo" required>

        <br><br>

        <label for="valor">Valor:</label>

        <br>

        <input type="number" name="valor" id="valor" step="0.01" required>

        <br><br>

        <label for="autor">Autor:</label>

        <br>

        <input type="text" name="autor" id="autor" required>

        <br><br>

        <label for="numPaginas">Número de Páginas:</label>

        <br>

        <input type="number" name="numPaginas" id="numPaginas" required>

        <br><br>

        <label for="anoPublicacao">Ano de Publicação:</label>

        <br>

        <input type="number" name="anoPublicacao" id="anoPublicacao" required>

        <br><br>

        <label for="isbn">ISBN:</label>

        <br>

        <input type="text" name="isbn" id="isbn" required>

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

    </div>

</body>

</html>