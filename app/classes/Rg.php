<?php

namespace app\classes;

class Rg{
    private $numeroRg;
    private $orgaoExpRg;
    private $dataExpRg;
    private $ufExpRg;

    public function __construct(){

    }

    public function getNumeroRg(){
        return $this->numeroRg;
    }

    public function setNumeroRg($numeroRg){
        $this->numeroRg = $numeroRg;
    }

    public function getOrgaoExpRg(){
        return $this->orgaoExpRg;
    }

    public function setOrgaoExpRg($orgaoExpRg){
        $this->orgaoExpRg = $orgaoExpRg;
    }    

    public function getDataExpRg(){
        return $this->dataExpRg;
    }
    
    public function setDataExpRg($dataExpRg){
        $this->dataExpRg = $dataExpRg;
    }

    public function getUfExpRg(){
        return $this->ufExpRg;
    }

    public function setUfExpRg($ufExpRg){
        $this->ufExpRg = $ufExpRg;
    }    


    public function __toString(){
        return  "============== RG ==============\n".
                "RG Nº: ".$this->numeroRg."\n".
                "Orgão Expedidor: ".$this->orgaoExpRg."\n".
                "Data Expedição: ".$this->dataExpRg."\n".
                "RG UF: ".$this->ufExpRg."\n";
    }
}
?>