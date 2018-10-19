<?php

namespace app\classes;

class Endereco{

    private $cep;
    private $cidade;
    private $logradouro;
    private $numero;
    private $bairro;
    private $ufEndereco;

    public function __construct(){

    }
    
    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getUfEndereco(){
        return $this->ufEndereco;
    }

    public function setUfEndereco($ufEndereco){
        $this->$ufEndereco = $ufEndereco;
    }
    
    public function __toString(){
        return  "=========== ENDEREÇO ===========\n".
                "Cep: ".$this->cep."\n".
                "Cidade: ".$this->cidade."\n".
                "Logradouro: ".$this->logradouro."\n".
                "Numero: ".$this->numero."\n".
                "Bairro: ".$this->bairro."\n".
                "Estado: ".$this->ufEndereco."\n";
    }
}
?>