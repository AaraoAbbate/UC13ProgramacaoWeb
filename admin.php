<!DOCTYPE html>
<html>
<head>
    <title>Administrador</title>
</head>
<body>

<h2> Perfil Usuario</h2>

<form method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="text" name="email" step="0.01" required><br>

    <label for="senha">Senha:</label>
    <input type="text" name="senha" required><br>

    <input type="submit" value="logar">
</form>


<?php

class Admin {

    public $nome;
    public $email;
    public $senha;

    public function __construct($nome,$email,$senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
 
    $admin = new Admin($nome, $email, $senha);

    echo "<h3>Usuario:</h3>";
    echo "<table border='1'>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th> 
            </tr>
            <tr>
                <td>{$admin->getNome()}</td>
                <td>{$admin->getEmail()}</td>
                <td>{$admin->getSenha()}</td>
            </tr>
          </table>";
}
?>

</body>
</html>