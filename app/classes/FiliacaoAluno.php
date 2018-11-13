<?php

namespace app\classes;

use app\classes\Rg;

class FiliacaoAluno{

    private $codigo;
    private $nomepaialuno;
    private $profissaopai;
    private $rgpaialuno;
    private $nomemaealuno;
    private $profissaomae;
    private $rgmaealuno;

    public function __construct(){
        $this->rgpaialuno = new Rg();
        $this->rgmaealuno = new Rg();
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

    public function getCodigoFiliacao(){
        return $this->codigo;
    }

    public function setCodigoFiliacao($codigo){
        $this->codigo = $codigo;
    }

    public function getNomePaiAluno(){
        return $this->nomepaialuno;
    }

    public function setNomePaiAluno($nomepaialuno){
        $this->nomepaialuno = $nomepaialuno;
    }

    public function getProfissaoPaiAluno(){
        return $this->profissaopai;
    }

    public function setProfissaoPaiAluno($profissaopai){
        $this->profissaopai = $profissaopai;
    }

    public function getRgPaiAluno(){
        return $this->rgpaialuno;
    }

    public function setRgPaiAluno(Rg $rgpaialuno){
        $this->rgpaialuno = $rgpaialuno;
    }

    public function getNomeMaeAluno(){
        return $this->nomemaealuno;
    }

    public function setNomeMaeAluno($nomemaealuno){
        $this->nomemaealuno = $nomemaealuno;
    }

    public function getProfissaoMaeAluno(){
        return $this->profissaomae;
    }

    public function setProfissaoMaeAluno($profissaomae){
        $this->profissaomae = $profissaomae;
    }

    public function getRgMaeAluno(){
        return $this->rgmaealuno;
    }

    public function setRgMaeAluno(Rg $rgmaealuno){
        $this->rgmaealuno = $rgmaealuno;
    }
}

?>