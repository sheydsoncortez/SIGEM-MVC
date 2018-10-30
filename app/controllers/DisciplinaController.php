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

    public function __contruct()
    {

    }

    public function index()
    {
        $this->load("admin");
    }

    public function cadastrar($page)
    {
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

    public function salvar($page){
        switch ($page) {
            case 1:
                $this->setDadosDisciplina();
                header('location:' . URL_BASE . 'disciplina/editar/' . base64_encode($_SESSION["disciplina"]->codigo));
                break;
            case 2:
                $dados = array();
                $d = new DisciplinaModel();

                $dados = $d->inserir();
                if ($dados["status"]) {
                    $dados["view"] = "template/inicio";
                    $this->load("admin", $dados);

                } else {

                    $this->load("admin", $dados);
                }
                //echo "<pre>";
                //print_r($d->inserir());

        }
    }
    public function setDadosDisciplina(){
        $disciplina = new Disciplina();

        $disciplina->nome = $_POST["nome"];
        $disciplina->codigo = $_POST["codigo"];
        $disciplina->professor = $_POST["professor"];
        $disciplina->turma = $_POST["turma"];
        $disciplina->serie = $_POST["serie"];

        $_SESSION["disciplina"] = $disciplina;
        //echo "<pre>";
        //print_r($_SESSION["disciplina"]);
    }

    public function editar($codigo){
        $dados["titulo"] = "DADOS DISCIPLINA";
        $dados["view"] = "template/disciplina/revisadados-disciplina";
        //$dados["modal"] = "template/funcionario/atualiza-funcionario-modal.php";
        $dados["page"] = "";
        $dados['link'] = "disciplina/editar/".$codigo;
        $dados['breadcrumbl1'] = "disciplina";
        $dados['breadcrumbl2'] = "editar";

        //$funcionario = new FuncionarioModel();

        /*if(!$funcionario->getFuncionario(base64_decode($cpf))){
            if($_SESSION["funcionario"]){
                $this->load("admin", $dados);
            }
        }else{
            $_SESSION["funcionario"] = $funcionario->getFuncionario(base64_decode($cpf));
            $this->load("admin", $dados);
        }*/

        $this->load("admin", $dados);
    }

    public function listar(){
        $disciplinas = DisciplinaModel();
        $dados['link'] = "disciplina/listar";
        $dados['breadcrumbl1'] = "disciplina";
        $dados['breadcrumbl2'] = "listar";
        $dados["view"] = "template/listar-disciplina";
        $dados["modal"] = "template/funcionario/atualiza-disciplina-modal.php";
        $dados["funcionarios"] = $disciplinas->listarTodos();
        $this->load("admin", $dados);
    }

    public function corrigir(){
        $dados["msn"] = "Teste";
        $dados["view"] = "template/inicio";
        $this->load("admin", $dados);
    }


    /**
     * Cria uma SESSION de um Objeto Disciplina para armazenar
     * os dados enquanto navega no formulário de cadastro.
     *
     * @method mixed setDadosDisciplina()
     * @return void
     */
    public function setDadosDisciplina{
        $disciplina = new Disciplina();

        $disciplina->nome = $_POST['nome'];
        $disciplina->professor = $_POST['professor'];
        $disciplina->turma = $_POST['turma'];
        $disciplina->serie = $_POST['serie'] ;


        $_SESSION['disciplina'] = $disciplina;

    }
}
