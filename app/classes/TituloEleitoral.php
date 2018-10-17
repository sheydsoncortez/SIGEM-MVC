<?php 

namespace app\classes;

class TituloEleitoral{
    private $numeroTit;
    private $secaoTit;
    private $zonaTit;

    public function __construct(){

    }

    public function getNumeroTit(){
        return $this->numeroTit;
    }

    public function setNumeroTit($numeroTit){
        $this->numeroTit = $numeroTit;
    }

    public function getSecaoTit(){
        return $this->secaoTit;
    }

    public function setSecaoTit($secaoTit){
        $this->secaoTit = $secaoTit;
    }

    public function getZonaTit(){
        return $this->zonaTit;
    }

    public function setZonaTit($zonaTit){
        $this->zonaTit = $zonaTit;
    }

    public function __toString(){

        return  "======= TÍTULO ELEITORAL =======\n".
                "Título Nº: ".$this->numeroTit."\n".
                "Título Seção: ".$this->secaoTit."\n".
                "Título Zona: ".$this->zonaTit."\n";
    }
}
?>