<html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de ADM</title>

</head>

<body>

    <div>

        <h1>Cadastro de ADM</h1>

        <?php

        if (isset($_GET['success'])) {

            echo 'Cadastro de ADM foi feito com sucesso!';

        }

        ?>

        <form action="processar_cadastro_adm.php" method="post">

            <label for="nomeADM">Nome do ADM:</label><br>

            <input type="text" name="nomeADM" id="nomeADM" required>

            <br>

            <label for="cpfADM">CPF do ADM:</label><br>

            <input type="text" name="cpfADM" id="cpfADM" required>

            <br>

            <label for="areaTrabalho">Área de Trabalho:</label><br>

            <input type="text" name="areaTrabalho" id="areaTrabalho" required><br>

            <br>

            <button type="submit">Cadastrar ADM</button>

            <br>

        </form>

    </div>

</body>

</html>