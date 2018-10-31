<?php

namespace app\controllers;

use app\core\Controller;
use app\models\AlunoModel;
use app\models\FiliacaoAluno;
use app\classes\DocumentosAluno;

class AlunoController extends Controller{
    public function __contruct(){

    }

    public function index(){
        $this->load("admin");
    }

    public function cadastrar($page){

        $dados["view"] = "template/form-aluno";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        $alunos = new AlunoModel();
        $dados['link'] = "aluno/cadastrar/".$page;
        $dados['breadcrumbl1'] = "aluno";
        $dados['breadcrumbl2'] = "cadastrar";

        switch($page){
            case '1':
                $dados["titulo"] = "DADOS DO ALUNO";
                $dados["paginator"] = "aluno/dados-aluno.php";
                $dados["active"] = array("active", "", "", "", "");
                $dados["disabled"] = array("disabled", "", "disabled", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "2";
                $dados["page"] = $page;
                break;
            case '2';
                $dados["titulo"] = "FILIAÇÃO";
                $dados["paginator"] = "aluno/filiacao-aluno.php";
                $dados["active"] = array("", "active", "", "", "");
                $dados["disabled"] = array("","", "", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "3";
                $dados["page"] = $page;
                break;
            case '3';
                $dados["titulo"] = "DOCUMENTOS DO ALUNO";
                $dados["paginator"] = "aluno/documentos-aluno.php";
                $dados["active"] = array("", "", "active", "", "");
                $dados["disabled"] = array("","", "", "", "disabled", "");
                $dados["voltar"] = "2";
                $dados["proximo"] = "4";
                $dados["page"] = $page;
        }

        $this->load("admin", $dados);
        unset($dados);
    }

    public function salvar(){
        return null;
    }

    public function setDadosAluno(){
        $aluno = new Funcionario();

        $aluno->nomeAluno = $_POST['nomeAluno'];
        $aluno->dataNascAluno = $_POST['dataNascAluno'];
        $aluno->cidadeNascAluno = $_POST['cidadeNascAluno'];
        $aluno->estadoNascAluno = $_POST['estadoNascAluno'] ;
        $aluno->corAluno = $_POST['corAluno'];
        $aluno->sexoAluno = $_POST['sexoAluno'];
        $aluno->pcdAluno = $_POST['pcdAluno'];

        $_SESSION['aluno'] = $aluno;
    }
}