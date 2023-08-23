<?php

class Aluno{
    private $IdAluno;
    public $nome;
    public $dataNascimento;
    public $email;
    public $cpf;
    public $telefone;
    public $celular;

    public function __construct($nome, $dataNascimento, $email, $cpf, $telefone, $celular){
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->celular = $celular;
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

        $this->aluno->nome = $aluno->nome; 
        $this->aluno->email = $aluno->email;
        $this->livro->titulo = $livro->titulo;
        $this->aluno->telefone = $aluno->telefone;
        $this->aluno->cpf = $aluno->cpf;
        
        
        /*
        $this->titulo = $titulo;
        $this->valor = $valor;
        $this->autor = $autor;
        $this->numeropagina = $numeroPagina;
        $this->anopublicacao = $anoPublic;
        $this->isbn = $isbn;*/

    }
}



    
    



