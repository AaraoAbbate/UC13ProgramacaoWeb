<!DOCTYPE html>  //28.08
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Cadastro de alunos</h1>
    <form action="processar_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone"><br>
        <br>

        <label for="dataNascimento">Data de Nascimento:</label>
        <input type="date" id="dataNascimento" name="dataNascimento" required><br>
        <br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br>
        <br>

        <label for="celular">Celular:</label>
        <input type="tel" id="celular" name="celular"><br>
        <br>

        <input type="submit" value="Cadastrar Aluno">
    </form>

    <hr>
    <div id="aluno-info" style="display: none;">
    <h2>Informações do Aluno</h2>
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
            <td id="info-nome"></td>
            <td id="info-email"></td>
            <td id="info-telefone"></td>
            <td id="info-dataNascimento"></td>
            <td id="info-cpf"></td>
            <td id="info-celular"></td>
        </tr>
    </table>
</div>


    
