<?php

namespace app\classes;

use app\classes\RegistroNascimento;
use app\classes\Rg;
use app\classes\TituloEleitor;
use app\classes\Reservista;

class DocumentosAluno{

    private $rg;
    private $tituloeleitor;
    private $reservista;
    private $registronascimento;

    public function __construct(){
        $this->registronascimento = new RegistroNascimento();
        $this->rg = new Rg();
        $this->tituloeleitor = new TituloEleitor();
        $this->reservista = new Reservista();
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

    public function getRegistroNasc(){
        return $this->registronascimento;
    }

    public function setRegistroNasc(RegistroNascimento $registronascimento){
        $this->registronascimento = $registronascimento;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setRg(Rg $rg){
        $this->rg = $rg;
    }

    public function getTituloEleitoral(){
        return $this->tituloeleitor;
    }

    public function setTituloEleitoral(TituloEleitoral $tituloeleitor){
        $this->tituloeleitor = $tituloeleitor;
    }

    public function getReservista(){
        return $this->reservista;
    }

    public function setReservista(Reservista $reservista){
        $this->reservista = $reservista;
    }
}

?>