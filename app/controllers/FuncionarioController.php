<?php

namespace app\controllers;

use app\core\Controller;
use app\models\FuncionarioModel;
use app\classes\Funcionario;
use app\classes\Endereco;
use app\classes\DocumentosFuncionario;
use app\classes\DadosFuncionais;

class FuncionarioController extends Controller{


    
    public function __contruct(){

    }

    public function index(){
        $this->load("admin");
    }
    
    public function cadastrar($page){

        $dados["view"] = "template/form-funcionario";
        $dados["modal"] = "template/professor/modal-professor.php";
        $dados["page"] = $page;
        $dados["voltar"] = "";
        $dados["proximo"] = "";
        $funcionarios = new FuncionarioModel();
        $dados['link'] = "funcionario/cadastrar/".$page;
        $dados['breadcrumbl1'] = "funcionário";
        $dados['breadcrumbl2'] = "cadastrar";
        
        switch($page){
            case '1';
                $dados["titulo"] = "DADOS PESSOAIS";
                $dados["paginator"] = "funcionario/dados-funcionario.php";               
                $dados["active"] = array("active", "", "", "", "");
                $dados["disabled"] = array("disabled","", "disabled", "disabled", "disabled", "disabled","");
                $dados["voltar"] = "1";               
                $dados["proximo"] = "2";
                $dados["page"] = $page;
            break;
            case '2';
                $dados["titulo"] = "ENDEREÇO";
                $dados["paginator"] = "endereco/dados-endereco.php";
                $dados["active"] = array("", "active", "", "", "");
                $dados["disabled"] = array("","", "", "disabled", "disabled", "disabled","");               
                $dados["voltar"] = "1";
                $dados["proximo"] = "3";
                $dados["page"] = $page;
            break;
            case '3';
                $dados["titulo"] = "DOCUMENTOS";
                $dados["paginator"] = "funcionario/documentos-funcionario.php";
                $dados["active"] = array("", "", "active", "", "");
                $dados["disabled"] = array("","", "", "", "disabled", "disabled","");               
                $dados["voltar"] = "2";
                $dados["proximo"] = "4";
                
            break;
            case '4';
                $dados["titulo"] = "DADOS FUNCIONAIS";
                $dados["paginator"] = "funcionario/dados-funcionais.php";
                $dados["active"] = array("", "", "", "active", "");
                $dados["disabled"] = array("","", "", "", "", "disabled","");                
                $dados["voltar"] = "3";
                $dados["proximo"] = "5";
                $dados["page"] = $page;
            break;
            
        }    

        $this->load("admin", $dados);
        $dados = "";
    }       

    public function salvar($page){        
        switch ($page){
            case 1:
                $funcionario = new Funcionario();

                $funcionario->nome = $_POST['nome'];
                $funcionario->datanasc = $_POST['dataNasc'];
                $funcionario->cidadenasc = $_POST['cidadeNasc'];
                $funcionario->estadonasc = $_POST['estadoNasc'] ;
                $funcionario->nomepai = $_POST['nomePai'];
                $funcionario->nomemae = $_POST['nomeMae'] ;
                $funcionario->sexo = $_POST['sexo'];
                $funcionario->estadocivil = $_POST['estadoCivil'];
                $funcionario->telefone = $_POST['telefone'];
                $funcionario->email = $_POST['email'];
                $_SESSION['funcionario'] = $funcionario;

                //echo nl2br( $_SESSION['funcionario']);
                header('location:' . URL_BASE . 'funcionario/cadastrar/2');
            break;
            case 2:
                $enderecof = new Endereco();
                $enderecof->setCep($_POST['cep']);
                $enderecof->setCidade($_POST['cidade']);
                $enderecof->setLogradouro($_POST['logradouro']);
                $enderecof->setNumero($_POST['numero']);
                $enderecof->setBairro($_POST['bairro']);
                $enderecof->setEstado($_POST['estado']);
                $_SESSION['funcionario']->setEndereco($enderecof);

                header('location:' . URL_BASE . 'funcionario/cadastrar/3');
            break;
            case 3:
                $documentosf = new DocumentosFuncionario();
                $documentosf->setCpf($_POST['cpf']);
                $documentosf->setPisPasep($_POST['pisPasep']);
                $documentosf->getCtps()->setNumero($_POST['numeroCtps']);
                $documentosf->getCtps()->setSerie($_POST['serieCtps']);
                $documentosf->getRg()->setNumero($_POST['numeroRg']);
                $documentosf->getRg()->setOrgaoexp($_POST['orgaoExpRg']);
                $documentosf->getRg()->setDataexp($_POST['dataExpRg']);
                $documentosf->getRg()->setUfexp($_POST['ufExpRg']);
                $documentosf->getTituloeleitor()->setNumero($_POST['numeroTit']);
                $documentosf->getTituloeleitor()->setSecao($_POST['secaoTit']);
                $documentosf->getTituloeleitor()->setZona($_POST['zonaTit']);
                $documentosf->getReservista()->setNumero($_POST['numeroRes']);
                $documentosf->getReservista()->setCategoria($_POST['categoriaRes']);
                $documentosf->getReservista()->setSerie($_POST['serieRes']);
                $_SESSION['funcionario']->setDocumentos($documentosf);

                header('location:' . URL_BASE . 'funcionario/cadastrar/4');
            break;
            case 4:
                $dados = array();
                $dadosFuncionaisF = new DadosFuncionais();
                
                if(empty($_POST['formacaoAcademicaFun'])){
                    $dadosFuncionaisF->setFormacaoAcademica('-');
                }else{
                    $dadosFuncionaisF->setFormacaoAcademica($_POST['formacaoAcademicaFun']);
                }
                
                $dadosFuncionaisF->setMatricula($_POST['matriculaFun']);
                $dadosFuncionaisF->setDataadmissao($_POST['dataAdmissaoFun']);
                $dadosFuncionaisF->setEscolaridade($_POST['escolaridadeFun']);
                $dadosFuncionaisF->setAnoconclusao($_POST['anoConclusaoFun']);
                $dadosFuncionaisF->setCargo($_POST['cargoFun']);
                $dadosFuncionaisF->setFuncao($_POST['funcaoFun']);
                $_SESSION['funcionario']->setDadosfuncionais($dadosFuncionaisF);

                $f = new FuncionarioModel();

                $dados = $f->inserir();

                if($dados["status"]) {

                    //header('location:' . URL_BASE . 'funcionario/editar/'.$dados["cpf"]);

                }else{

                    //header('location:' . URL_BASE);

                }

            break;
        } 
    }
    
    public function editar($cpf){

        $dados["titulo"] = "DADOS FUNCIONARIO";
        $dados["view"] = "template/funcionario/revisadados-funcionario";
        $dados["modal"] = "template/funcionario/atualiza-funcionario.php";
        $dados["page"] = "";
        $dados['link'] = "funcionario/editar/".$cpf;
        $dados['breadcrumbl1'] = "funcionário";
        $dados['breadcrumbl2'] = "editar";

        $funcionario = new FuncionarioModel();

        $_SESSION["funcionario"] = $funcionario->getFuncionario($cpf);

        $this->load("admin", $dados);

   }
   
   public function listar(){
      $funcionarios = new FuncionarioModel();
      $dados['link'] = "funcionario/listar";
      $dados['breadcrumbl1'] = "funcionário";
      $dados['breadcrumbl2'] = "listar";
      $dados["view"] = "template/listar-funcionario";
      $dados["modal"] = "template/funcionario/atualiza-funcionario.php";
      $dados["funcionarios"] = $funcionarios->listarTodos();
      $this->load("admin", $dados);
   }

   public function corrigir(){
       $dados["msn"] = "Teste";
       $dados["view"] = "template/inicio";
       $this->load("admin", $dados);
   }
}