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
            case '3';
                $dados["titulo"] = "PREENCHER TURMA";
                $dados["paginator"] = "turma/preencher-turma2.php";
                $dados["active"] = array("", "", "active", "", "");
                $dados["disabled"] = array("","", "", "", "disabled", "");
                $dados["voltar"] = "2";
                $dados["proximo"] = "4";
                $dados["page"] = $page;

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
                $this->setPreencherTurma2();
                header('location:' . URL_BASE . 'turma/cadastrar/4');

            case 4:
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

        $turma->nome = $_POST["serie"];
        $turma->classe = $_POST["classe"];
        $turma->ano = $_POST["ano"];


        $_SESSION["turma"] = $turma;
        //echo "<pre>";
        //print_r($_SESSION["turma"]);
    }
    public function setPreencherTurma(){
        $turmaf = new turma();

        $turmaf->disciplina = $_POST["disciplina"];

        $_SESSION["turma"]->turma = $turmaf;
        //echo "<pre>";
        //print_r($_SESSION["turma"]);
    }
    public function setPreencherTurma2(){
        $turma2 = new turma();

        $turma2->aluno = $_POST["aluno"];

        $_SESSION["turma"]->turma = $turma2;
        //echo "<pre>";
        //print_r($_SESSION["turma"]);
    }

    public function editar(){

        $dados["titulo"] = "DADOS TURMA";
        $dados["view"] = "template/aluno/revisar-turma";
        $dados["modal"] = "template/turma/atualiza-turma-modal.php";
        $dados["page"] = "";
        $dados['link'] = "turma/editar/";
        $dados['breadcrumbl1'] = "turma";
        $dados['breadcrumbl2'] = "editar";

        $turma = new TurmaModel();

        if(isset($_SESSION['turma'])){
            $this->load("admin", $dados);
        }else
            if(empty($_SESSION['turma'])){
                $_SESSION["turma"] = $turma->getAluno();
                $this->load("admin", $dados);
        }else{
            $this->load("admin", $dados);
        }
        //echo "<pre>";
        //print_r($_SESSION['funcionario']);


   }
    public function listarTurma(){
        $turma = new TurmaModel();
        $dados['link'] = "turma/listar";
        $dados['breadcrumbl1'] = "turma";
        $dados['breadcrumbl2'] = "listar";
        $dados["view"] = "template/turma/listar-turma";
        $dados["modal"] = "template/turma/atualiza-turma-modal.php";
        $dados["turma"] = $turma->listarTodos();
        $this->load("admin", $dados);

        //echo "<pre>";
        //print_r($dados["disciplina"]);
    }




}