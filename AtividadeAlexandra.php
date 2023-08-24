<?php

$listaAlunos = [
    [   "ID"=> "1",
        "nome" => "João",
        "dataNascimento" => "1990-01-15",
        "email" => "joao@example.com",
        "cpf" => "123.456.789-00",
        "telefone" => "12345678",
        "celular" => "987654321"
    ]
    ];
    $listaLivros = [
     [
        "nome" => "João",
        "dataNascimento" => "1990-01-15",
        "email" => "joao@example.com",
        "cpf" => "123.456.789-00",
        "telefone" => "12345678",
        "celular" => "987654321"
     ]
     ];
class Aluno{
    private $IdAluno;
    private $nome;
    private $dataNascimento;
    private $email;
    private $cpf;
    private $telefone;
    private $celular;

    public function __construct($nome, $dataNascimento, $email, $cpf, $telefone, $celular){
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->celular = $celular;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getdataNAscimento(){
        return $this->dataNascimento;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getCelular(){
        return $this->celular;
    }
}

class Livro{
    public $Idlivro;
    public $titulo;
    public $valor;
    public $autor;
    public $numeroPaginas;
    public $anoPublic;
    public $isbn;

    public function __construct($titulo, $valor, $autor, $numeroPaginas, $anoPublic, $isbn) {
        $this->titulo = $titulo;
        $this->valor = $valor;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
        $this->anoPublic = $anoPublic;
        $this->isbn = $isbn;
    }
}


class Emprestimo{
    private $idEmprestimo;
    public $aluno;
    public $livro;
    public $dataEmprestimo;
    public $dataDevolucao;

    public function __construct(Livro $livro, Aluno $aluno) {
        $this->aluno = $aluno;
        $this->livro = $livro; 
        /*
        $this->titulo = $titulo;
        $this->valor = $valor;
        $this->autor = $autor;
        $this->numeropagina = $numeroPagina;
        $this->anopublicacao = $anoPublic;
        $this->isbn = $isbn;*/

    }

    public function getAluno(){
        return $this->aluno; 
    }

    public function getLivro(){
        return $this->livro;
    }
}



    
    



