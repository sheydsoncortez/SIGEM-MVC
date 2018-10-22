<?php 

namespace app\classes;

class TituloEleitor{

    private $numero;
    private $secao;
    private $zona;

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getSecao()
    {
        return $this->secao;
    }

    /**
     * @param mixed $secao
     */
    public function setSecao($secao): void
    {
        $this->secao = $secao;
    }

    /**
     * @return mixed
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * @param mixed $zona
     */
    public function setZona($zona): void
    {
        $this->zona = $zona;
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


    public function __toString(){

        return  "======= TÍTULO ELEITORAL =======\n".
                "Título Nº: ".$this->numero."\n".
                "Título Seção: ".$this->secao."\n".
                "Título Zona: ".$this->zona."\n";
    }
}