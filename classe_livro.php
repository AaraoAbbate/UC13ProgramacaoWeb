<?php

class Livro{
    public $Idlivro;
    public $titulo;
    public $valor;
    public $autor;
    public $numeroPaginas;
    public $anoPublic;
    public $isbn;
/////
    public function __construct($titulo, $valor, $autor, $numeroPaginas, $anoPublic, $isbn) {
        $this->titulo = $titulo;
        $this->valor = $valor;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
        $this->anoPublic = $anoPublic;
        $this->isbn = $isbn;
    }
}

?>