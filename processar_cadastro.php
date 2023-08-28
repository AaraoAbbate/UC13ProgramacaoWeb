<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Aluno</title>
    <style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
    <h1>Informações do Aluno</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $dataNascimento = $_POST["dataNascimento"];
        $cpf = $_POST["cpf"];
        $celular = $_POST["celular"];
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Celular</th>
        </tr>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $telefone; ?></td>
            <td><?php echo $dataNascimento; ?></td>
            <td><?php echo $cpf; ?></td>
            <td><?php echo $celular; ?></td>
        </tr>
    </table>
    <?php
    }
    ?>
</body>
</html>