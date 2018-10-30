<?php

namespace app\controllers;

use app\classes\Turma;
use app\core\Controller;
use app\models\TurmaModel;


class TurmaController extends Controller
{

    public function __contruct()
    {

    }

    public function index()
    {
        $this->load("admin");
    }

    public function cadastrar(){

        $dados["view"] = "template/form-turma";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        $turmas = new TurmaModel();
        $dados['link'] = "turma/cadastrar/".$page;
        $dados['breadcrumbl1'] = "turma";
        $dados['breadcrumbl2'] = "cadastrar";

        switch ($page) {
            case '1';
                $dados["titulo"] = "Dados da Turma";
                $dados["paginator"] = "turma/dados-turma.php";
                $dados["active"] = array("active", "", "", "", "");
                $dados["disabled"] = array("disabled", "", "disabled", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "2";
                $dados["page"] = $page;
                break;

        }
        //echo"<pre>";
        //print_r($dados);
        $this->load("admin", $dados);
        $dados = "";
    }






}