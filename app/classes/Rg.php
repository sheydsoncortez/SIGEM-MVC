<?php

namespace app\classes;

class Rg{
    private $numero;
    private $orgaoexp;
    private $dataexp;
    private $ufexp;

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

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getOrgaoexp(){
        return $this->orgaoexp;
    }

    public function setOrgaoexp($orgaoexp){
        $this->orgaoexp = $orgaoexp;
    }    

    public function getDataexp(){
        return $this->dataexp;
    }
    
    public function setDataexp($dataexp){
        $this->dataexp = $dataexp;
    }

    public function getUfexp(){
        return $this->ufexp;
    }

    public function setUfexp($ufexp){
        $this->ufexp = $ufexp;
    }    


    public function __toString(){
        return  "============== RG ==============\n".
                "RG Nº: ".$this->numero."\n".
                "Orgão Expedidor: ".$this->orgaoexp."\n".
                "Data Expedição: ".$this->dataexp."\n".
                "RG UF: ".$this->ufexp."\n";
    }
}
?>