<?php

namespace app\controllers;

use app\classes\Escola;
use app\core\Controller;
use app\classes\Endereco;

use app\models\EscolaModel;


class EscolaController extends Controller
{

    public function __contruct()
    {

    }

    public function index()
    {
        $this->load("admin");
    }


    public function cadastrar($page)
    {
        $dados["view"] = "template/form-escola";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        // $escola = new EscolaModel(); Não utilizado
        $dados['link'] = "escola/cadastrar/" . $page;
        $dados['breadcrumbl1'] = "escola";
        $dados['breadcrumbl2'] = "cadastrar";

        switch($page){
            case '1':
                $dados["titulo"] = "DADOS DA ESCOLA";
                $dados["paginator"] = "escola/dados-escola.php";
                $dados["active"] = array("active", "", "", "", "");
                $dados["disabled"] = array("disabled", "", "disabled", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "2";
                $dados["page"] = $page;
                break;
            case '2':
                $dados["titulo"] = "ENDEREÇO";
                $dados["paginator"] = "endereco/dados-endereco.php";
                $dados["active"] = array("", "active", "", "", "");
                $dados["disabled"] = array("","", "", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "3";
                $dados["page"] = $page;
                $dados["entidade"] = "escola";
                break;

        }

        $this->load("admin", $dados);
        unset($dados);
        //echo"<pre>";
        //print_r($dados);

    }


    public function salvar($page){

        switch ($page){
            case 1:

                $this->setDadosEscola();
                header('location:' . URL_BASE . 'escola/cadastrar/2');

                break;
            case 2:

                $this->setEndereco();
                header('location:' . URL_BASE . 'escola/editar/'.base64_encode($_SESSION['escola']->codigo));

                break;
            case 3:{

                $dados = array();
                $e = new EscolaModel();

                if(!isset($_SESSION["es_id"]->codigo)){
                    $dados = $e->inserir();

                    if($dados["status"]) {
                        $dados["view"] = "template/inicio";
                        $this->load("admin", $dados);
                    }else{
                        $dados["view"] = "template/inicio";
                        $this->load("admin", $dados);
                    }
                    echo "<pre>";
                    print_r($dados);
                    //echo "<pre>";
                    //print_r($dados);
                } else if(isset($_SESSION["es_id"]->codigo)){
                    $dados = $e->update();

                    $dados["view"] = "template/inicio";

                    $this->load("admin", $dados);

                }
            }
                break;
        }
    }

    public function setDadosEscola(){
        $escola = new Escola();

        $escola->nome = $_POST['nome'];
        $escola->codigo = $_POST['codigo'];
        $escola->telefone = $_POST['telefone'];
        $escola->email = $_POST['email'];

        $_SESSION['escola'] = $escola;

        //echo "<pre>";
        //print_r($_SESSION["escola"]);

    }

    private function setEndereco(){
        $enderecoe = new Endereco();

        $enderecoe->cep = $_POST['cep'];
        $enderecoe->cidade = $_POST['cidade'];
        $enderecoe->logradouro = $_POST['logradouro'];
        $enderecoe->numero = $_POST['numero'];
        $enderecoe->bairro = $_POST['bairro'];
        $enderecoe->estado = $_POST['estado'];

        $_SESSION['escola']->endereco = $enderecoe;
    }


    public function editar($codigo){

        $dados["titulo"] = "DADOS ESCOLA";
        $dados["view"] = "template/escola/revisar-escola";
        $dados["modal"] = "template/escola/atualiza-escola-modal.php";
        $dados["page"] = "";
        $dados['link'] = "escola/editar/";
        $dados['breadcrumbl1'] = "escola";
        $dados['breadcrumbl2'] = "editar";
        $dados['entidade'] = "escola";

        $escola = new EscolaModel();

        if(isset($_SESSION['escola'])){

            $this->load("admin", $dados);

            // echo "1";

        }else
            if(empty($_SESSION['escola'])){
                if($escola->getEscola(base64_decode($codigo))){
                    $_SESSION["escola"] = $escola->getEscola(base64_decode($codigo));
                    $_SESSION["es_id"]->codigo = $_SESSION["escola"] -> codigo;

                    $this->load("admin", $dados);
                    //echo "2";
                }


            }else{

                $this->load("admin", $dados);

                //echo "3";
            }
        // echo "<pre>";
        // print_r($_SESSION['escola']);

    }


    public function listar(){
        $escola = new EscolaModel();
        $dados['link'] = "escola/listar";
        $dados['breadcrumbl1'] = "escola";
        $dados['breadcrumbl2'] = "listar";
        $dados["view"] = "template/escola/listar-escola";
        $dados["modal"] = "template/escola/atualiza-escola-modal.php";
        $dados["escolas"] = $escola->listarTodos();
        $this->load("admin", $dados);

        //echo "<pre>";
        //print_r($dados["disciplina"]);
    }

    public function corrigir(){

        $this->setDadosEscola();
        $this->setEndereco();

        $e=$_SESSION['escola'];
        header("Location:".URL_BASE . "escola/editar/".base64_encode($e->codigo));

    }

    public function remover($codigo){

        $remover = new EscolaModel();
        $dados = $remover->remover(base64_decode($codigo));

        if($dados['status']){

            //$this->listar();

            header("Location:".URL_BASE . "escola/listar/ativos");

        }else{

            $dados["view"] = "template/inicio";

            $this->load("admin", $dados);
        }
    }



}