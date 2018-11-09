<?php
/**
 * Created by PhpStorm.
 * User: mikmimichel
 * Date: 29/10/2018
 * Time: 21:17
 */

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
                $f = new EscolaModel();
                $dados = $f->inserir();
                if($dados["status"]) {
                    $dados["view"] = "template/inicio";
                    $this->load("admin", $dados);
                }else{
                    $this->load("admin", $dados);
                }
             // echo "<pre>";
             // print_r($dados);
            }
        }
    }

    public function setDadosEscola(){
        $escola = new Escola();

        $escola->nome = $_POST['nome'];
        $escola->codigo = $_POST['codigo'];
        $escola->telefone = $_POST['telefone'];
        $escola->email = $_POST['email'];

        $_SESSION['escola'] = $escola;

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
       // $dados["modal"] = "template/funcionario/atualiza-funcionario-modal.php";
        $dados["page"] = "";
        $dados['link'] = "escola/editar/".$codigo;
        $dados['breadcrumbl1'] = "escola";
        $dados['breadcrumbl2'] = "editar";

        $escola = new EscolaModel();

       /* if(!$escola->getEscola(base64_decode($codigo))){
            if($_SESSION["Escola"]){
                $this->load("admin", $dados);
            }
        }else{
            $_SESSION["escola"] = $escola->getEscola(base64_decode($codigo));
            $this->load("admin", $dados);
        }*/

        $this->load("admin", $dados);
    }




}