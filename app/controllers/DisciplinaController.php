<?php
/**
 * Created by PhpStorm.
 * User: Sheydson Cortez
 * Date: 29/10/2018
 * Time: 10:23
 */

namespace app\controllers;


use app\core\Controller;

use app\models\DisciplinaModel;
use app\classes\Disciplina;



class DisciplinaController extends Controller
{

    public function __contruct(){

    }

    public function index(){
        $this->load("admin");
    }

    public function cadastrar($page){
        $dados["view"] = "template/form-disciplina";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        $funcionarios = new DisciplinaModel();
        $dados['link'] = "disciplina/cadastrar/" . $page;
        $dados['breadcrumbl1'] = "disciplina";
        $dados['breadcrumbl2'] = "cadastrar";

        switch ($page) {
            case '1';
                $dados["titulo"] = "DADOS DA DISCIPLINA";
                $dados["paginator"] = "disciplina/dados-disciplina.php";
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