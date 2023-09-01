<!DOCTYPE html>
<html>
<head>
    <title>Emprestimos</title>
</head>
<body>

<h2>Dados Emprestimos</h2>

<form method="post">
    <label for="id">Id:</label>
    <input type="number" name="id" required><br>

    <label for="titulo">titulo do livro:</label>
    <input type="text" name="titulo" required><br>

    <label for="nome">Nome do aluno:</label>
    <input type="text" name="nome" step="0.01" required><br>

    <label for="data_retirada">Data retirada:</label>
    <input type="date" name="data_retirada" required><br>

    <label for="data_devolucao">Data Devolução:</label>
    <input type="date" name="data_devolucao" required><br>

    <label for="cpf">CPf do aluno:</label>
    <input type="number" name="cpf" required><br>

    <label for="email">Email do aluno:</label>
    <input type="text" name="email" required><br>

    <input type="submit" value="Emprestimos">
</form>


<?php

class Emprestimo {
    
    public $id;
    public $titulo;
    public $nome;
    public $dataRetirada;
    public $dataDevolucao;
    public $cpf;
    public $email;


    public function __construct($id,$titulo,$nome,$dataRetirada,$dataDevolucao,$cpf,$email)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->nome = $nome;
        $this->dataRetirada = $dataRetirada;
        $this->dataDevolucao = $dataDevolucao;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function getID(){
        return $this->id;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function getTitulo(){
        return $this-> titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDataRetirada(){
        return $this->dataRetirada;
    }

    public function setDataRetirada($dataRetirada){
        $this->dataRetirada = $dataRetirada;
    }

    public function getDataDevolucao(){
        return $this->dataDevolucao;
    }

    public function setDataDevolucao($dataDevolucao){
        $this->dataDevolucao = $dataDevolucao;
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
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $nome = $_POST["nome"];
    $dataRetirada = $_POST["data_retirada"];
    $dataDevolucao = $_POST["data_devolucao"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];

    $Emprestimo = new Emprestimo($id, $titulo, $nome, $dataRetirada, $dataDevolucao,$cpf,$email);

    echo "<h3>Emprestimos:</h3>";
    echo "<table border='1'>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Nome</th>
                <th>DataRetirada</th>
                <th>DataDevolucao</th>
                <th>CPF</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>{$Emprestimo->getID()}</td>
                <td>{$Emprestimo->getTitulo()}</td>
                <td>{$Emprestimo->getNome()}</td>
                <td>{$Emprestimo->getDataRetirada()}</td>
                <td>{$Emprestimo->getDataDevolucao()}</td>
                <td>{$Emprestimo->getCPF()}</td>
                <td>{$Emprestimo->getEmail()}</td>
            </tr>
          </table>";
}
?>

</body>
</html>
