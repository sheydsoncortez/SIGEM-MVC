<?php

namespace app\controllers;

use app\core\Controller;
use app\models\AlunoModel;
use app\classes\FiliacaoAluno;
use app\classes\DocumentosAluno;
use app\classes\Aluno;

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
            case '2';
                $dados["titulo"] = "FILIAÇÃO";
                $dados["paginator"] = "aluno/filiacao-aluno.php";
                $dados["active"] = array("", "active", "", "", "");
                $dados["disabled"] = array("","", "", "disabled", "disabled", "");
                $dados["voltar"] = "1";
                $dados["proximo"] = "3";
                $dados["page"] = $page;
                break;
            case '3';
                $dados["titulo"] = "DOCUMENTOS DO ALUNO";
                $dados["paginator"] = "aluno/documentos-aluno.php";
                $dados["active"] = array("", "", "active", "", "");
                $dados["disabled"] = array("","", "", "", "disabled", "");
                $dados["voltar"] = "2";
                $dados["proximo"] = "4";
                $dados["page"] = $page;
        }

        $this->load("admin", $dados);
        unset($dados);
    }

    public function salvar($page){
        switch ($page){
            case 1:

                $this->setDadosAluno();
                header('location:' . URL_BASE . 'aluno/cadastrar/2');

            break;
            case 2:
                
                $this->setFiliacao();
                header('location:' . URL_BASE . 'aluno/cadastrar/3');
                
            break;
            case 3:
                
                $this->setDocumentosAluno();
                header('location:' . URL_BASE . 'aluno/editar/');

            break;
            case 4:

                $dados = array(); 

                $a = new AlunoModel();

                $dados = $a->inserir();
                
                if($dados["status"]) {
                    $dados["view"] = "template/inicio";
                    $this->load("admin", $dados);

                }else{

                    $this->load("admin", $dados);
                }
            break;
            case 6:
            
                $f = new AlunoModel();
            
                $dados = $f->update($_SESSION['aluno']);
            
            break;
        } 
    }

    public function listar(){
        $aluno = new AlunoModel();
        $dados['link'] = "aluno/listar";
        $dados['breadcrumbl1'] = "aluno";
        $dados['breadcrumbl2'] = "listar";
        $dados["view"] = "template/listar-aluno";
        $dados["modal"] = "template/funcionario/atualiza-funcionario-modal.php";
        $dados["aluno"] = $aluno->listarTodos();
        $this->load("admin", $dados);
     }

    public function setDadosAluno(){
        $aluno = new Aluno();

        $aluno->nomeAluno = $_POST['nomeAluno'];
        $aluno->dataNascAluno = $_POST['dataNascAluno'];
        $aluno->cidadeNascAluno = $_POST['cidadeNascAluno'];
        $aluno->estadoNascAluno = $_POST['estadoNascAluno'] ;
        $aluno->corAluno = $_POST['corAluno'];
        $aluno->sexoAluno = $_POST['sexoAluno'];
        $aluno->pcdAluno = $_POST['pcdAluno'];

        $_SESSION['aluno'] = $aluno;
    }

    public function setFiliacao(){
        $filiacao = new FiliacaoAluno();

        $filiacao->nomePaiAluno = $_POST['nomePaiAluno'];
        $filiacao->profissaoPai = $_POST['profissaoPai'];
        $filiacao->rgPaiAluno->numero = $_POST['numeroRg'];
        $filiacao->rgPaiAluno->orgaoexp = $_POST['orgaoExpRg'];
        $filiacao->rgPaiAluno->dataexp = $_POST['dataExpRg'];
        $filiacao->rgPaiAluno->estadoexp = $_POST['ufExpRg'];
        $filiacao->nomePaiAluno = $_POST['nomePaiAluno'];
        $filiacao->nomePaiAluno = $_POST['nomePaiAluno'];
        $filiacao->rgMaeAluno->numero = $_POST['numeroRg'];
        $filiacao->rgMaeAluno->orgaoexp = $_POST['orgaoExpRg'];
        $filiacao->rgMaeAluno->dataexp = $_POST['dataExpRg'];
        $filiacao->rgMaeAluno->estadoexp = $_POST['ufExpRg'];
    }

    public function setDocumentosAluno(){
        $documentosa = new DocumentosAluno();

        $documentosa->rg->numero = $_POST['numeroRg'];
        $documentosa->rg->orgaoexp = $_POST['orgaoExpRg'];
        $documentosa->rg->dataexp = $_POST['dataExpRg'];
        $documentosa->rg->estadoexp = $_POST['ufExpRg'];
        $documentosa->tituloEleitoral->numero = $_POST['numeroTit'];
        $documentosa->tituloEleitoral->secao = $_POST['secaoTit'];
        $documentosa->tituloEleitoral->zona = $_POST['zonaTit'];
        $documentosa->registroNascimento->cartorio = $_POST['nomeCartorio'];
        $documentosa->registroNascimento->numeroRegistro = $_POST['numeroReg'];
        $documentosa->registroNascimento->livro = $_POST['livroReg'];
        $documentosa->registroNascimento->folha = $_POST['folhaReg'];
        $documentosa->registroNascimento->cidade = $_POST['cidadeReg'];
        $documentosa->registroNascimento->uf = $_POST['ufReg'];
        $documentosa->registroNascimento->data = $_POST['dataReg'];

        if($_SESSION['aluno']->sexo == 'M'){

            $documentosa->reservista->numero = $_POST['numeroRes'];
            $documentosa->reservista->categoria = $_POST['categoriaRes'];
            $documentosa->reservista->serie = $_POST['serieRes'];

        }else if($_SESSION['aluno']->sexo == 'F'){
            isset($_POST['numeroRes']) ? $documentosa->reservista->numero = $_POST['numeroRes'] : 
                                         $documentosa->reservista->numero ="";

            isset($_POST['CategoriaRes']) ? $documentosa->reservista->categoria = $_POST['CategoriaRes'] : 
                                            $documentosa->reservista->categoria = "";
                                            
            isset($_POST['serieRes']) ? $documentosa->reservista->serie = $_POST['serieRes'] : 
                                        $documentosa->reservista->serie = "";
        }

        $_SESSION['aluno']->documentos = $documentosa;
   }
}