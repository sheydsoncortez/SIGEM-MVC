<?php

namespace app\controllers;

use app\core\Controller;
use app\models\AlunoModel;
use app\classes\Rg;
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
        }

        $this->load("admin", $dados);
        unset($dados);
    }
}