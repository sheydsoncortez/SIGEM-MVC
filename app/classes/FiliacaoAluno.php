<?php

namespace app\classes;

use app\classes\Rg;

class FiliacaoAluno(){

    private $nomePaiAluno;
    private $profissaoPai;
    private $rgPaiAluno;
    private $nomeMaeAluno;
    private $profissaoMae;
    private $rgMaeAluno;

    public function __construct(){
        $this->rgPaiAluno = new Rg();
        $this->rgMaeAluno = new Rg();
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

    public function getNomePaiAluno(){
        return $this->nomePaiAluno;
    }

    public function setNomePaiAluno($nomePaiAluno){
        $this->nomePaiAluno = $nomePaiAluno;
    }

    public function getProfissaoPaiAluno(){
        return $this->profissaoPai;
    }

    public function setProfissaoPaiAluno($profissaoPai){
        $this->profissaoPai = $profissaoPai;
    }

    public function getRgPaiAluno(){
        return $this->rgPaiAluno;
    }

    public function setRgPaiAluno(Rg $rgPaiAluno){
        $this->rgPaiAluno = $rgPaiAluno;
    }

    public function getNomeMaeAluno(){
        return $this->nomeMaeAluno;
    }

    public function setNomeMaeAluno($nomeMaeAluno){
        $this->nomeMaeAluno = $nomeMaeAluno;
    }

    public function getProfissaoMaeAluno(){
        return $this->profissaoMae;
    }

    public function setProfissaoMaeAluno($profissaoMae){
        $this->profissaoMae = $profissaoMae;
    }

    public function getRgMaeAluno(){
        return $this->rgMaeAluno;
    }

    public function setRgMaeAluno(Rg $rgMaeAluno){
        $this->rgMaeAluno = $rgMaeAluno;
    }
}

?>