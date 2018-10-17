<?php
namespace app\classes;

class Ctps{
    private $numeroCtps;
    private $serieCtps;

    public function __construct(){

    }

    public function getNumeroCtps(){
        return $this->numeroCtps;
    }

    public function setNumeroCtps($numeroCtps){
        $this->numeroCtps = $numeroCtps;
    }

    public function getSerieCtps(){
        return $this->serieCtps;
    }

    public function setSerieCtps($serieCtps){
        $this->serieCtps = $serieCtps;
    }

    public function __toString(){
        return  "============= CTPS =============\n".
                "CTPS Nº: ".$this->numeroCtps."\n".
                "CTPS Série: ".$this->serieCtps."\n";
    }
}
?>