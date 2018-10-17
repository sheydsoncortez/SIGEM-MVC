<?php

namespace app\classes;

class DadosFuncionais{
    private $matriculaFun;
    private $cargoFun;
    private $funcaoFun;    
    private $dataAdmissaoFun;
    private $escolaridadeFun;
    private $formacaoAcademicaFun;
    private $anoConclusaoFun;
    //private $disciplinaFun;

    public function __construct(){

    }

    public function getMatriculaFun(){
        return $this->matriculaFun;
    }

    public function setMatriculaFun($matriculaFun){
        $this->matriculaFun = $matriculaFun;
    }

    public function getCargoFun(){
        return $this->cargoFun;
    }

    public function setCargoFun($cargoFun){
        $this->cargoFun = $cargoFun;
    }

    public function getFuncaoFun(){
        return $this->funcaoFun;
    }

    public function setFuncaoFun($funcaoFun){
        $this->funcaoFun = $funcaoFun;
    }

    public function getDataAdmissaoFun(){
        return $this->dataAdmissaoFun;
    }

    public function setDataAdmissaoFun($dataAdmissaoFun){
        $this->dataAdmissaoFun = $dataAdmissaoFun;
    }

    public function getEscolaridadeFun(){
        return $this->escolaridadeFun;
    }

    public function setEscolaridadeFun($escolaridadeFun){
        $this->escolaridadeFun = $escolaridadeFun;
    }
    public function getFormacaoAcademicaFun(){
        return $this->formacaoAcademicaFun;
    }

    public function setFormacaoAcademicaFun($formacaoAcademicaFun){
        $this->formacaoAcademicaFun = $formacaoAcademicaFun;
    }

    public function getAnoConclusaoFun(){
        return $this->anoConclusaoFun;
    }

    public function setAnoConclusaoFun($anoConclusaoFun){
        $this->anoConclusaoFun = $anoConclusaoFun;
    }

    public function __toString(){
        return  "======= DADOS FUNCIONAIS =======\n".
                "Matricula: ".$this->matriculaFun."\n".
                "Cargo: ".$this->cargoFun."\n".
                "Função: ".$this->funcaoFun."\n".
                "Data Admissão: ".$this->dataAdmissaoFun."\n".
                "Escolaridade: ".$this->escolaridadeFun."\n".
                "Formação Acadêmica: ".$this->formacaoAcademicaFun."\n".
                "Ano de Conclusão: ".$this->anoConclusaoFun."\n";
    }
}
?>