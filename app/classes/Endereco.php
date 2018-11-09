<?php

namespace app\classes;

class Endereco{

    private $cep;
    private $cidade;
    private $logradouro;
    private $numero;
    private $bairro;
    private $estado;

    public function __construct(){

    }

    public function __get($atrib)
    {
        // TODO: Implement __get() method.
        return $this->$atrib;
    }

    public function __set($atrib, $value)
    {
        // TODO: Implement __set() method.
        $this->$atrib = $value;
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

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado= $estado;
    }
    
    public function __toString(){
        return  "=========== ENDEREÇO ===========\n".
                "Cep: ".$this->cep."\n".
                "Cidade: ".$this->cidade."\n".
                "Logradouro: ".$this->logradouro."\n".
                "Numero: ".$this->numero."\n".
                "Bairro: ".$this->bairro."\n".
                "Estado: ".$this->estado."\n";
    }
}
?>