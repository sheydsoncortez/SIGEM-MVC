<?php
namespace app\classes;
use app\classes\Ctps;
use app\classes\Rg;
use app\classes\TituloEleitoral;
use app\classes\Reservista;

class DocumentosFuncionario{
    private $cpf;
    private $pisPasep;
    private $ctps;
    private $rg;
    private $tituloEleitoral;
    private $reservista;

    public function __construct(){
        $this->ctps = new Ctps();
        $this->rg = new Rg();
        $this->tituloEleitoral = new TituloEleitoral();
        $this->reservista = new Reservista();
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getPisPasep(){
        return $this->pisPasep;
    }

    public function setPisPasep($pisPasep){
        $this->pisPasep = $pisPasep;
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
                "CPF: ".$this->cpf."\n".
                "PIS/PASEP: ".$this->pisPasep."\n";
    }
}

?>