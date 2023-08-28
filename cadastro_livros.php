<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>

    <h1>Cadastro de alunos</h1>
    <form action="processar_cadastro_livros.php" method="post">
        <label for="titulo"> titulo:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        
        <label for="valor">valor:</label>
        <input type="number" id="valor" name="valor" step="0.01"><br>
        
        <label for="Npaginas">Numero de paginas:</label>
        <input type="number" id="Npaginas" name="Npaginas" required><br>
        
        <label for="anoPublic">Ano de publicação:</label>
        <input type="number" id="anoPublic" name="anoPublic" required><br>
        
        <input type="submit" value="Cadastrar Livro">
    </form>
    
    <hr>
    <div id="livros-info" style="display: none;">
    <h2>Informações do Aluno</h2>
    <table>
        <tr>
            <th>titulo</th>
            <th>Autor</th>
            <th>valor</th>
            <th>Numero de paginas</th>
            <th>Ano de Publicação</th>
        </tr>
        <tr>
            <td id="info-titulo"></td>
            <td id="info-autor"></td>
            <td id="info-valor"></td>
            <td id="info-Npaginas"></td>
            <td id="info-anoPublic"></td>
            
        </tr>
    </table>
</div>




