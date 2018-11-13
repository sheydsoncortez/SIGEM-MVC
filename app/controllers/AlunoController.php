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

    public function editar(){

        $dados["titulo"] = "DADOS ALUNO";
        $dados["view"] = "template/aluno/revisadados-aluno";
        $dados["modal"] = "template/funcionario/atualiza-funcionario-modal.php";
        $dados["page"] = "";
        $dados['link'] = "aluno/editar/";
        $dados['breadcrumbl1'] = "aluno";
        $dados['breadcrumbl2'] = "editar";

        $aluno = new AlunoModel();

        if(isset($_SESSION['aluno'])){
            $this->load("admin", $dados);
        }else
            if(empty($_SESSION['aluno'])){
                $_SESSION["aluno"] = $aluno->getAluno();
                $this->load("admin", $dados);
        }else{
            $this->load("admin", $dados);
        }
        //echo "<pre>";
        //print_r($_SESSION['funcionario']);

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

        $aluno->nomealuno = $_POST['nomeAluno'];
        $aluno->matriculaaluno = mt_rand(10000000, 99999999);
        $aluno->datanascaluno = $_POST['dataNascAluno'];
        $aluno->cidadenascaluno = $_POST['cidadeNascAluno'];
        $aluno->estadonascaluno = $_POST['estadoNasc'];
        $aluno->coraluno = $_POST['corAluno'];
        $aluno->sexoaluno = $_POST['sexoAluno'];
        
        if($_POST['pcdAluno'] == "Sim"){
            $aluno->pcdaluno = $_POST['pcdAlunoInput'];
        }else{
            $aluno->pcdaluno = $_POST['pcdAluno'];
        }

        $_SESSION['aluno'] = $aluno;
    }

    public function setFiliacao(){
        $filiacao = new FiliacaoAluno();

        $filiacao->nomepaialuno = $_POST['nomePaiAluno'];
        $filiacao->profissaopai = $_POST['profissaoPai'];
        $filiacao->rgpaialuno->numero = $_POST['numeroRgPai'];
        $filiacao->rgpaialuno->orgaoexp = $_POST['orgaoExpRgPai'];
        $filiacao->rgpaialuno->dataexp = $_POST['dataExpRgPai'];
        $filiacao->rgpaialuno->ufexp = $_POST['ufExpRgPai'];
        $filiacao->nomemaealuno = $_POST['nomeMaeAluno'];
        $filiacao->profissaomae = $_POST['profissaoMae'];
        $filiacao->rgmaealuno->numero = $_POST['numeroRg'];
        $filiacao->rgmaealuno->orgaoexp = $_POST['orgaoExpRg'];
        $filiacao->rgmaealuno->dataexp = $_POST['dataExpRgMae'];
        $filiacao->rgmaealuno->ufexp = $_POST['ufExpRg'];

        $_SESSION['aluno']->filiacaoaluno = $filiacao;
    }

    public function setDocumentosAluno(){
        $documentosa = new DocumentosAluno();

        $documentosa->rg->numero = $_POST['numeroRg'];
        $documentosa->rg->orgaoexp = $_POST['orgaoExpRg'];
        $documentosa->rg->dataexp = $_POST['dataExpRg'];
        $documentosa->rg->ufexp = $_POST['ufExpRg'];
        $documentosa->tituloeleitor->numero = $_POST['numeroTit'];
        $documentosa->tituloeleitor->secao = $_POST['secaoTit'];
        $documentosa->tituloeleitor->zona = $_POST['zonaTit'];
        $documentosa->registronascimento->cartorio = $_POST['nomeCartorio'];
        $documentosa->registronascimento->numeroregistro = $_POST['numeroReg'];
        $documentosa->registronascimento->livro = $_POST['livroReg'];
        $documentosa->registronascimento->folha = $_POST['folhaReg'];
        $documentosa->registronascimento->cidade = $_POST['cidadeReg'];
        $documentosa->registronascimento->uf = $_POST['ufReg'];
        $documentosa->registronascimento->data = $_POST['dataReg'];

        if($_SESSION['aluno']->sexoaluno == 'M'){

            $documentosa->reservista->numero = $_POST['numeroRes'];
            $documentosa->reservista->categoria = $_POST['categoriaRes'];
            $documentosa->reservista->serie = $_POST['serieRes'];

        }else if($_SESSION['aluno']->sexoaluno == 'F'){
            isset($_POST['numeroRes']) ? $documentosa->reservista->numero = $_POST['numeroRes'] : 
                                         $documentosa->reservista->numero ="";

            isset($_POST['CategoriaRes']) ? $documentosa->reservista->categoria = $_POST['CategoriaRes'] : 
                                            $documentosa->reservista->categoria = "";
                                            
            isset($_POST['serieRes']) ? $documentosa->reservista->serie = $_POST['serieRes'] : 
                                        $documentosa->reservista->serie = "";
        }

        $_SESSION['aluno']->documentosaluno = $documentosa;
   }
}