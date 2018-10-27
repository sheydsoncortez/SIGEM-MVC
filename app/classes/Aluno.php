<?php

namespace app\classes;

use app\core\Controller;
use app\classes\Rg;

class Aluno{

    // Dados do Aluno
    private $matriculaAluno;
    private $nomeAluno;
    private $dataNascAluno;
    private $cidadeNascAluno;
    private $estadoNascAluno;
    private $corAluno;
    private $sexoAluno;
    private $pcdAluno; // pcd = Pessoa com Deficiencia
    private $statusAluno;

    // Escola
    private $codigoEscola;

    // Filiação
    private $nomePaiAluno;
    private $profissaoPai;
    private $rgPaiAluno;
    private $nomeMaeAluno;
    private $profissaoMae;
    private $rgMaeAluno;

    // Documentos Alunos
    private $documentosAluno;

    public function __construct(){
        $this->view = new \stdClass;
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

    public function getNomeAluno(){
        return $this->nomeAluno;
    }

    public function setNomeAluno($nomeAluno){
        $this->nomeAluno = $nomeAluno;
    }

    public function getDataNascAluno(){
        return $this->dataNascAluno;
    }

    public function setDataNascAluno($dataNascAluno){
        $this->dataNascAluno = $dataNascAluno;
    }

    public function getCidadeNascAluno(){
        return $this->cidadeNascAluno;
    }

    public function setCidadeNascAluno($cidadeNascAluno){
        $this->cidadeNascAluno = $cidadeNascAluno;
    }

    public function getEstadoNascAluno(){
        return $this->estadoNascAluno;
    }

    public function setEstadoNascAluno($estadoNascAluno){
        $this->estadoNascAluno = $estadoNascAluno;
    }

    public function getCorAluno(){
        return $this->corAluno;
    }

    public function setCorAluno($corAluno){
        $this->corAluno = $corAluno;
    }

    public function getSexoAluno(){
        return $this->sexoAluno;
    }

    public function setSexoAluno($sexoAluno){
        $this->sexoAluno = $sexoAluno;
    }

    public function getPcdAluno(){
        return $this->pcdAluno;
    }

    public function setPcdAluno($pcdAluno){
        $this->pcdAluno = $pcdAluno;
    }

    public function getStatusAluno(){
        return $this->statusAluno;
    }

    public function setStatusAluno($statusAluno){
        $this->statusAluno = $statusAluno;
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

    public function getDocumentosAluno(){
        return $this->documentosAluno;
    }

    public function setDocumentosAluno(DocumentosAluno $documentosAluno){
        $this->documentosAluno = $documentosAluno;
    }
}
?>