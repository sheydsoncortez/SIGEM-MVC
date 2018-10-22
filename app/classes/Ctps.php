<?php
namespace app\classes;

class Ctps{
    private $numero;
    private $serie;

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

    public function getSerie(){
        return $this->serie;
    }

    public function setSerie($serie){
        $this->serie = $serie;
    }

    public function __toString(){
        return  "============= CTPS =============\n".
                "CTPS Nº: ".$this->numero."\n".
                "CTPS Série: ".$this->serie."\n";
    }
}
?>