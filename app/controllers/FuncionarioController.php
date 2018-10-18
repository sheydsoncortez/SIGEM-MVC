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
            case '5';
                $dados["titulo"] = "DADOS FUNCIONAIS";
                $dados["paginator"] = "funcionario/revisadados-funcionario.php";
                $dados["modal"] = "template/funcionario/atualiza-funcionario.php";
                $dados["active"] = array("", "", "", "", "", "active");
                $dados["disabled"] = array("","", "", "", "", "","disabled");  
                $dados["voltar"] = "4";
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
                $funcionario->setNome($_POST['nome']);
                $funcionario->setDataNasc($_POST['dataNasc']);
                $funcionario->setCidadeNasc($_POST['cidadeNasc']);
                $funcionario->setEstadoNasc($_POST['estadoNasc']);
                $funcionario->setNomePai($_POST['nomePai']);
                $funcionario->setNomeMae($_POST['nomeMae']);
                $funcionario->setSexo($_POST['sexo']);
                $funcionario->setEstadoCivil($_POST['estadoCivil']);
                $funcionario->setTelefone($_POST['telefone']);
                $funcionario->setEmail($_POST['email']);
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
                $enderecof->setUfEndereco($_POST['ufEndereco']);
                $_SESSION['funcionario']->setEndereco($enderecof);

                header('location:' . URL_BASE . 'funcionario/cadastrar/3');
            break;
            case 3:
                $documentosf = new DocumentosFuncionario();
                $documentosf->setCpf($_POST['cpf']);
                $documentosf->setPisPasep($_POST['pisPasep']);
                $documentosf->getCtps()->setNumeroCtps($_POST['numeroCtps']);
                $documentosf->getCtps()->setSerieCtps($_POST['serieCtps']);
                $documentosf->getRg()->setNumeroRg($_POST['numeroRg']);
                $documentosf->getRg()->setOrgaoExpRg($_POST['orgaoExpRg']);
                $documentosf->getRg()->setDataExpRg($_POST['dataExpRg']);
                $documentosf->getRg()->setUfExpRg($_POST['ufExpRg']);
                $documentosf->getTituloEleitoral()->setNumeroTit($_POST['numeroTit']);
                $documentosf->getTituloEleitoral()->setSecaoTit($_POST['secaoTit']);
                $documentosf->getTituloEleitoral()->setZonaTit($_POST['zonaTit']);
                $documentosf->getReservista()->setNumeroRes($_POST['numeroRes']);
                $documentosf->getReservista()->setCategoriaRes($_POST['categoriaRes']);
                $documentosf->getReservista()->setSerieRes($_POST['serieRes']);
                $_SESSION['funcionario']->setDocumentos($documentosf); 

                header('location:' . URL_BASE . 'funcionario/cadastrar/4');
            break;
            case 4:
                $dadosFuncionaisF = new DadosFuncionais();
                
                if(empty($_POST['formacaoAcademicaFun'])){
                    $dadosFuncionaisF->setFormacaoAcademicaFun('-');
                }else{
                    $dadosFuncionaisF->setFormacaoAcademicaFun($_POST['formacaoAcademicaFun']);
                }
                
                $dadosFuncionaisF->setMatriculaFun($_POST['matriculaFun']);
                $dadosFuncionaisF->setDataAdmissaoFun($_POST['dataAdmissaoFun']);
                $dadosFuncionaisF->setEscolaridadeFun($_POST['escolaridadeFun']);        
                $dadosFuncionaisF->setAnoConclusaoFun($_POST['anoConclusaoFun']);
                $dadosFuncionaisF->setCargoFun($_POST['cargoFun']);
                $dadosFuncionaisF->setFuncaoFun($_POST['funcaoFun']); 
                $_SESSION['funcionario']->setDadosFuncionais($dadosFuncionaisF);
                /*echo nl2br( $_SESSION['funcionario'].''.
                            $_SESSION['funcionario']->getEndereco()->__toString().''.
                            $_SESSION['funcionario']->getDocumentos()->__toString().''.
                            $_SESSION['funcionario']->getDocumentos()->getCtps()->__toString().''.
                            $_SESSION['funcionario']->getDocumentos()->getRg()->__toString().''.
                            $_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->__toString().''.
                            $_SESSION['funcionario']->getDocumentos()->getReservista()->__toString().''.
                            $_SESSION['funcionario']->getDadosFuncionais()->__toString());*/
                header('location:' . URL_BASE . 'funcionario/cadastrar/5');
            break;
            case 5:
                $funcionario = new FuncionarioModel();
                $dados["msn"] = $funcionario->inserir();
                $this->load("admin", $dados);
            break;
        } 
    }
    
    public function listar(){

        $funcionario = new FuncionarioModel();

        $dados["funcionario"] = $funcionario->listarUm();

        //echo"<pre>";

        //print_r($dados);
   }
}