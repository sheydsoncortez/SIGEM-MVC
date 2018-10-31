<?php
/**
 * Created by PhpStorm.
 * User: mikmimichel
 * Date: 29/10/2018
 * Time: 21:17
 */

namespace app\controllers;

use app\core\Controller;
use app\classes\Escola;
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
        $escola = new EscolaModel();
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
            case '2';
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





}