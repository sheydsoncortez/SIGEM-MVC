<?php

namespace app\classes;

use app\classes\RegistroNascimento;
use app\classes\Rg;
use app\classes\TituloEleitor;
use app\classes\Reservista;

class DocumentosAluno{

    private $rg;
    private $tituloEleitoral;
    private $reservista;
    private $registroNascimento;

    public function __construct(){
        $this->registroNascimento = new RegistroNascimento();
        $this->rg = new Rg();
        $this->tituloEleitoral = new TituloEleitor();
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
        return $this->registroNascimento;
    }

    public function setRegistroNasc(RegistroNascimento $registroNascimento){
        $this->registroNascimento = $registroNascimento;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setRg(Rg $rg){
        $this->rg = $rg;
    }

    public function getTituloEleitoral(){
        return $this->tituloEleitoral;
    }

    public function setTituloEleitoral(TituloEleitoral $tituloEleitoral){
        $this->tituloEleitoral = $tituloEleitoral;
    }

    public function getReservista(){
        return $this->reservista;
    }

    public function setReservista(Reservista $reservista){
        $this->reservista = $reservista;
    }

    public function __toString(){
        return  "========== DOCUMENTOS ==========\n".
                "CPF: ".$this->cpf."\n";
    }
}

?>