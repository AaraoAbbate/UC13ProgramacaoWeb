<?php

class endereco {

    public $cep;
    public $logradouro;
    public $bairro;
    public $localidade;
    public $uf;

    public function buscarEndereco($cep){
        $resultado = file_get_contents("https://viacep.com.br/ws/$cep/json/");

        $DadosEndereco = json_decode($resultado, true);

        if($DadosEndereco){
            $endereco = new Endereco(
                $DadosEndereco['cep'],
                $DadosEndereco['logradouro'],
                $DadosEndereco['bairro'],
                $DadosEndereco['localidade'],
                $DadosEndereco['uf']
 
            );
            
            return $endereco;
     
        }else{
            
        }
    }

    public function imprimirEndereco($endereco){
        
        echo '<p> CEP: [$endereco->cep] </p>'; 
        echo '<p> logradouro: [$endereco->logradouro] </p>'.$this-> $endereco;
        echo '<p> bairro: [$endereco->bairro] </P>'.$this-> $endereco;
        eho '<p> localidade: [$endereco->localidade] </p>'.$
        


    }
}