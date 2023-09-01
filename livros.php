<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Livros</title>
</head>
<body>

<h2>Cadastro de Livros</h2>

<form method="post">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required><br>

    <label for="valor">Valor:</label>
    <input type="number" name="valor" step="0.01" required><br>

    <label for="dataPublicacao">Data de Publicação:</label>
    <input type="date" name="dataPublicacao" required><br>

    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" required><br>

    <input type="submit" value="Cadastrar Livro">
</form>


<?php 

class livro{
    public $titulo;
    public $autor;
    public $valor;
    public $dataPublicacao;
    public $isbn;

    public function __construct($titulo,$autor,$valor,$dataPublicacao,$isbn)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->valor = $valor;
        $this->dataPublicacao = $dataPublicacao;
        $this->isbn = $isbn;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getDataPublicacao(){
        return $this->dataPublicacao;
    }

    public function setDatapublicacao($dataPublicacao){
        $this->dataPublicacao = $dataPublicacao;
    }

    public function getISBN(){
        return $this->isbn;
    }

    public function setISBN($isbn){
        $this->isbn = $isbn;
    }
        
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $valor = $_POST["valor"];
    $dataPublicacao = $_POST["dataPublicacao"];
    $isbn = $_POST["isbn"];

    $livro = new Livro($titulo, $autor, $valor, $dataPublicacao, $isbn);

    echo "<h3>Livro cadastrado:</h3>";
    echo "<table border='1'>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Valor</th>
                <th>Data de Publicação</th>
                <th>ISBN</th>
            </tr>
            <tr>
                <td>{$livro->getTitulo()}</td>
                <td>{$livro->getAutor()}</td>
                <td>{$livro->getValor()}</td>
                <td>{$livro->getDataPublicacao()}</td>
                <td>{$livro->getISBN()}</td>
            </tr>
          </table>";
}
?>

</body>
</html>






        
    

