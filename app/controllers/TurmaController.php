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

    public function cadastrar($page){

        $dados["view"] = "template/form-turma";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        $turma = new TurmaModel();
        $dados['link'] = "turma/cadastrar/" . $page;
        $dados['breadcrumbl1'] = "turma";
        $dados['breadcrumbl2'] = "cadastrar";

        switch ($page) {
            case '1';
                $dados["titulo"] = "DADOS DA TURMA";
                $dados["paginator"] = "turma/dados-turma.php";
                $dados["active"] = array("active", "", "", "", "");
                $dados["disabled"] = array("disabled", "", "disabled", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "2";
                $dados["page"] = $page;
                break;
            case '2';
                $dados["titulo"] = "PREENCHER TURMA";
                $dados["paginator"] = "turma/preencher-turma.php";
                $dados["active"] = array("", "active", "", "", "");
                $dados["disabled"] = array("","", "", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "3";
                $dados["page"] = $page;
                break;

        }

        //echo"<pre>";
        //print_r($dados);
        $this->load("admin", $dados);
        unset($dados);
    }

    public function salvar($page){
        switch ($page) {
            case 1:
                $this->setDadosTurma();
                header('location:' . URL_BASE . 'turma/cadastrar/2');
                break;
            case 2:

                $this->setPreencherTurma();
                header('location:' . URL_BASE . 'turma/cadastrar/3');

                break;
            case 3:
                $dados = array();
                $d = new TurmaModel();

                $dados = $d->inserir();
                if ($dados["status"]) {
                    $dados["view"] = "template/inicio";
                    $this->load("admin", $dados);

                } else {

                    $this->load("admin", $dados);
                }
                //echo "<pre>";
                //print_r($dados);

        }

    }
    public function setDadosTurma(){
        $turma = new turma();

        $turma->nome = $_POST["nome"];

        $_SESSION["turma"] = $turma;
        //echo "<pre>";
        //print_r($_SESSION["turma"]);
    }
    public function setPreencherTurma(){
        $turma = new turma();

        $turma->turma = $_POST["disciplina"];
        $turma->serie = $_POST["aluno"];

        $_SESSION["turma"] = $turma;
        //echo "<pre>";
        //print_r($_SESSION["turma"]);
    }



}