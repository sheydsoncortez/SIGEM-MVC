<?php

namespace app\classes;

use app\core\Controller;
use app\classes\Rg;
use app\classes\DocumentosAluno;
use app\classes\FiliacaoAluno;

class Aluno{

    // Dados do Aluno
    private $codigo;
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
    private $filiacaoAluno;

    // Documentos Alunos
    private $documentosAluno;

    public function __construct(){
        $this->view = new \stdClass;
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

    public function getCodigoAluno(){
        return $this->codigo;
    }

    public function setCodigoAluno($codigo){
        $this->codigo = $codigo;
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

    public function getFiliacao(){
        return $this->filiacaoAluno;
    }

    public function setFiliacao(FiliacaoAluno $filiacaoAluno){
        $this->filiacaoAluno = $filiacaoAluno;
    }

    public function getDocumentosAluno(){
        return $this->documentosAluno;
    }

    public function setDocumentosAluno(DocumentosAluno $documentosAluno){
        $this->documentosAluno = $documentosAluno;
    }
}
?>