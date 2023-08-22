<?php
    if(isset($_POST['cep']) && !empty($_POST['cep'])){

        $cep = $_POST['cep'];

        $resultado = file_get_contents("https://viacep.com.br/ws/$cep/json/");

        $DadosEndereco = json_decode($resultado, true);

        //var_dump($DadosEndereco);

    }else{
        
        header("location:buscar-endereco.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cep</title>
</head>
<body>

    <h1>Endereço</h1>
    <hr>
    <p>CEP: <?= $DadosEndereco['cep'] ?> </p>
    <p>Logradouro:  <?= $DadosEndereco['logradouro'] ?></p>
    <p>Bairro:  <?= $DadosEndereco['bairro'] ?></p>
    <p>Cidade:  <?= $DadosEndereco['localidade'] ?></p>
    <p>Estado:  <?= $DadosEndereco['uf'] ?></p>
   

   
</body>
</html>