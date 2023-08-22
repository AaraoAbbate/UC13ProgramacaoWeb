<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senha</title>

    <style>
        .boxSenha{
            border: 1px solid #cccccc;
            display: inline-block;
            padding: 20px;
            width: 50px;
            text-align: center;
            background-color: #fbec5d;
            font-size: 20px;
            color: black;
            font-weight: bold;
            margin: 5px;
        }
    </style>

</head>
<body>
    <h1>Gerador de senha</h1>

    <form action="geradorsenha.php" method="get">
        <label for="qtdeSenha">Quantidade de senhas</label>
        <br>
        <input name="qtdeSenha" type="number" id="qtdeSenha">
        <br>
        <button type="submit">Gerar</button>
        <a href="geradorsenha.php">Cancelar Senhas</a>
    </form>

    <hr>

    

    <?php if(isset($_GET['qtdeSenha'])) :  ?>

        <?php for($i = 1; $i <= $_GET['qtdeSenha']; $i++): ?>
        <div class="boxSenha">
            <?= $i ?>
        </div>
        <?php endfor; ?>
           
       <?php endif; ?>

        <hr>
       <p>
            Copyright &copy; <?= date("Y")?> - Todos os direitos são reservados
       </p>
    

   
  
</body>
</html>