<?php

namespace app\controllers;

use app\core\Controller;
use app\classes\Rg;
use app\classes\DocumentosAluno;

class AlunoController extends Controller{
    public function __contruct(){

    }

    public function index(){
        $this->load("admin");
    }

    public function cadastrar(){

        $dados["view"] = "template/form-aluno";
        $dados["modal"] = "template/professor/modal-professor.php";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        $alunos = new AlunoModel();
        $dados['link'] = "funcionario/cadastrar/".$page;
        $dados['breadcrumbl1'] = "aluno";
        $dados['breadcrumbl2'] = "cadastrar";
    }
}