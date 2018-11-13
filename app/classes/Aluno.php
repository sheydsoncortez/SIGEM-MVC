<?php

namespace app\classes;

use app\core\Controller;
use app\classes\Rg;
use app\classes\DocumentosAluno;
use app\classes\FiliacaoAluno;

class Aluno{

    // Dados do Aluno
    private $codigo;
    private $matriculaaluno;
    private $nomealuno;
    private $datanascaluno;
    private $cidadenascaluno;
    private $estadonascaluno;
    private $coraluno;
    private $sexoaluno;
    private $pcdaluno; // pcd = Pessoa com Deficiencia
    private $ativo;

    // Escola
    private $codigoescola;

    // Filiação
    private $filiacaoaluno;

    // Documentos Alunos
    private $documentosaluno;

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

    public function getMatriculaAluno(){
        return $this->matriculaaluno;
    }

    public function setMatriculaAluno($matriculaaluno){
        $this->matriculaaluno = $matriculaaluno;
    }

    public function getNomeAluno(){
        return $this->nomealuno;
    }

    public function setNomeAluno($nomealuno){
        $this->nomealuno = $nomealuno;
    }

    public function getDataNascAluno(){
        return $this->datanascaluno;
    }

    public function setDataNascAluno($datanascaluno){
        $this->datanascaluno = $datanascaluno;
    }

    public function getCidadeNascAluno(){
        return $this->cidadenascaluno;
    }

    public function setCidadeNascAluno($cidadenascaluno){
        $this->cidadenascaluno = $cidadenascaluno;
    }

    public function getEstadoNascAluno(){
        return $this->estadonascaluno;
    }

    public function setEstadoNascAluno($estadonascaluno){
        $this->estadonascaluno = $estadonascaluno;
    }

    public function getCorAluno(){
        return $this->coraluno;
    }

    public function setCorAluno($coraluno){
        $this->coraluno = $coraluno;
    }

    public function getSexoAluno(){
        return $this->sexoaluno;
    }

    public function setSexoAluno($sexoaluno){
        $this->sexoaluno = $sexoaluno;
    }

    public function getPcdAluno(){
        return $this->pcdaluno;
    }

    public function setPcdAluno($pcdaluno){
        $this->pcdaluno = $pcdaluno;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function getFiliacao(){
        return $this->filiacaoaluno;
    }

    public function setFiliacao(FiliacaoAluno $filiacaoaluno){
        $this->filiacaoaluno = $filiacaoaluno;
    }

    public function getDocumentosAluno(){
        return $this->documentosaluno;
    }

    public function setDocumentosAluno(DocumentosAluno $documentosaluno){
        $this->documentosaluno = $documentosaluno;
    }
}
?>