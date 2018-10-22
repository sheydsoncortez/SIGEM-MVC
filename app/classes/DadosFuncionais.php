<?php

namespace app\classes;

class DadosFuncionais{
    private $matricula;
    private $cargo;
    private $funcao;
    private $dataadmissao;
    private $escolaridade;
    private $formacaoacademica;
    private $anoaonclusao;
    //private $disciplina;

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

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function getFuncao(){
        return $this->Funcao;
    }

    public function setFuncao($Funcao){
        $this->Funcao = $Funcao;
    }

    public function getDataadmissao(){
        return $this->dataadmissao;
    }

    public function setDataadmissao($dataadmissao){
        $this->dataadmissao = $dataadmissao;
    }

    public function getEscolaridade(){
        return $this->escolaridade;
    }

    public function setEscolaridade($escolaridade){
        $this->escolaridade = $escolaridade;
    }
    public function getFormacaoacademica(){
        return $this->formacaoacademica;
    }

    public function setFormacaoacademica($formacaoacademica){
        $this->formacaoacademica = $formacaoacademica;
    }

    public function getAnoconclusao(){
        return $this->anoconclusao;
    }

    public function setAnoconclusao($anoconclusao){
        $this->anoconclusao = $anoconclusao;
    }

    public function __toString(){
        return  "======= DADOS CIONAIS =======\n".
                "Matricula: ".$this->matricula."\n".
                "Cargo: ".$this->cargo."\n".
                "Função: ".$this->funcao."\n".
                "Data Admissão: ".$this->dataadmissao."\n".
                "Escolaridade: ".$this->escolaridade."\n".
                "Formação Acadêmica: ".$this->formacaoacademica."\n".
                "Ano de Conclusão: ".$this->anoconclusao."\n";
    }
}
?>