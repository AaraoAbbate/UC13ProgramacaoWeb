<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Alunos</title>
</head>
<body>

<h2>Cadastro de Alunos</h2>

<form method="post">
    <label for="id">Id:</label>
    <input type="number" name="id" required><br>

    <label for="nome">Nome do Aluno:</label>
    <input type="text" name="nome" required><br>

    <label for="cpf">CPF:</label>
    <input type="number" name="cpf" step="0.01" required><br>

    <label for="email">Email:</label>
    <input type="text" name="email" required><br>

    <label for="telefone">Telefone:</label>
    <input type="number" name="telefone" required><br>

    <label for="celular">celular:</label>
    <input type="number" name="celular" required><br>

    <input type="submit" value="Cadastro de Aluno">
</form>


<?php

class Aluno {
    
    public $id;
    public $nome;
    public $cpf;
    public $email;
    public $telefone;
    public $celular;

    public function __construct($id,$nome,$cpf,$email,$telefone,$celular)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->celular = $celular;
    }

    public function getID(){
        return $this->id;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this-> nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];

    $Aluno = new Aluno($id, $nome, $cpf, $email, $telefone,$celular);

    echo "<h3>Aluno cadastrado:</h3>";
    echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>cpf</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>celular</th>
            </tr>
            <tr>
                <td>{$Aluno->getID()}</td>
                <td>{$Aluno->getNome()}</td>
                <td>{$Aluno->getCpf()}</td>
                <td>{$Aluno->getEmail()}</td>
                <td>{$Aluno->getTelefone()}</td>
                <td>{$Aluno->getCelular()}</td>
            </tr>
          </table>";
}
?>

</body>
</html>
