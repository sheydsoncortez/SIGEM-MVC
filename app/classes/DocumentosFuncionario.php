<?php
namespace app\classes;
use app\classes\Ctps;
use app\classes\Rg;
use app\classes\TituloEleitor;
use app\classes\Reservista;

class DocumentosFuncionario{
    private $cpf;
    private $pispasep;
    private $ctps;
    private $rg;
    private $tituloeleitor;
    private $reservista;

    public function __construct(){
        $this->ctps = new Ctps();
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

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getPispasep(){
        return $this->pispasep;
    }

    public function setPispasep($pispasep){
        $this->pispasep = $pispasep;
    }

    public function getCtps(){
        return $this->ctps;
    }

    public function setCtps(Ctps $ctps){
        $this->ctps = $ctps;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setRg(Rg $rg){
        $this->rg = $rg;
    }

    public function getTituloeleitor(){
        return $this->tituloeleitor;
    }

    public function setTituloeleitor(TituloEleitor $tituloeleitor){
        $this->tituloeleitor = $tituloeleitor;
    }

    public function getReservista(){
        return $this->reservista;
    }

    public function setReservista(Reservista $reservista){
        $this->reservista = $reservista;
    }

    public function __toString(){
        return  "========== DOCUMENTOS ==========\n".
                "CPF: ".$this->cpf."\n".
                "PIS/PASEP: ".$this->pispasep."\n";
    }
}

?>