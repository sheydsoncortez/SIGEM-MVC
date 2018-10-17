<?php 

namespace app\classes;

class Reservista{
    private $numeroRes;
    private $categoriaRes;
    private $serieRes;

    public function __construct(){

    }

    public function getNumeroRes(){
        return $this->numeroRes;
    }

    public function setNumeroRes($numeroRes){
        $this->numeroRes = $numeroRes;
    }

    public function getCategoriaRes(){
        return $this->categoriaRes;
    }

    public function setCategoriaRes($categoriaRes){
        $this->categoriaRes = $categoriaRes;
    }

    public function getSerieRes(){
        return $this->serieRes;
    }

    public function setSerieRes($serieRes){
        $this->serieRes = $serieRes;
    }

    public function __toString(){
        return  "========== RESERVISTA ==========\n".
                "Reservista Nº: ".$this->numeroRes."\n".
                "Reservista Categoria: ".$this->categoriaRes."\n".
                "Reservista Série: ".$this->serieRes."\n";
    }
}
?>