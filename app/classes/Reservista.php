<?php 

namespace app\classes;

class Reservista{
    private $numero;
    private $categoria;
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

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getSerie(){
        return $this->serie;
    }

    public function setSerie($serie){
        $this->serie = $serie;
    }

    public function __toString(){
        return  "========== RESERVISTA ==========\n".
                "Reservista Nº: ".$this->numero."\n".
                "Reservista Categoria: ".$this->categoria."\n".
                "Reservista Série: ".$this->serie."\n";
    }
}
?>