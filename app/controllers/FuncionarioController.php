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
                $dados["disabled"] = array("disabled","", "disabled", "disabled", "disabled", "");
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
            case '3';
                $dados["titulo"] = "DOCUMENTOS";
                $dados["paginator"] = "funcionario/documentos-funcionario.php";
                $dados["active"] = array("", "", "active", "", "");
                $dados["disabled"] = array("","", "", "", "disabled", "");
                $dados["voltar"] = "2";
                $dados["proximo"] = "4";
                
            break;
            case '4';
                $dados["titulo"] = "DADOS FUNCIONAIS";
                $dados["paginator"] = "funcionario/dados-funcionais.php";
                $dados["active"] = array("", "", "", "active", "");
                $dados["disabled"] = array("","", "", "", "", "disabled");
                $dados["voltar"] = "3";
                $dados["proximo"] = "5";
                $dados["page"] = $page;
            break;
            
        }
        //echo"<pre>";
        //print_r($dados);
        $this->load("admin", $dados);
        $dados = "";

    }       

    public function salvar($page){        
        switch ($page){
            case 1:

                $this->setDadosFuncionario();
                header('location:' . URL_BASE . 'funcionario/cadastrar/2');

            break;
            case 2:
                
                $this->setEndereco();
                header('location:' . URL_BASE . 'funcionario/cadastrar/3');
                
            break;
            case 3:
                
                $this->setDocumentosFuncionario();
                header('location:' . URL_BASE . 'funcionario/cadastrar/4');

            break;
            case 4:

                $this->setDadosFuncionais();                
                header('location:' . URL_BASE . 'funcionario/editar/'.$_SESSION["funcionario"]->documentos->cpf);

            break;
            case 5:{

                $dados = array(); 

                $f = new FuncionarioModel();

                $dados = $f->inserir();
                
                if($dados["status"]) {
                    $dados["view"] = "template/inicio";
                    $this->load("admin", $dados);

                }else{

                    $this->load("admin", $dados);
                }
            }
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

        if(!$funcionario->getFuncionario($cpf)){
            if($_SESSION["funcionario"]){
                $this->load("admin", $dados);
            }
        }else{
            $_SESSION["funcionario"] = $funcionario->getFuncionario($cpf);
            $this->load("admin", $dados);
        }
            

        

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


   /**
    * Cria uma SESSION de um Objeto Funcionário para armazenar 
    * os dados enquanto navega no formulário de cadastro.
    *
    * @method mixed setDadosFuncionario()
    * @return void
    */
   private function setDadosFuncionario(){
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
   }

   /**
    * Adiciona um Objeto endereço a SESSION Funcionário
    *
    * @method mixed setEndereco()
    * @return void
    */
   private function setEndereco(){
        $enderecof = new Endereco();

        $enderecof->cep = $_POST['cep'];
        $enderecof->cidade = $_POST['cidade'];
        $enderecof->logradouro = $_POST['logradouro'];
        $enderecof->numero = $_POST['numero'];
        $enderecof->bairro = $_POST['bairro'];
        $enderecof->estado = $_POST['estado'];

        $_SESSION['funcionario']->endereco = $enderecof;
   }

    /**
    * Adiciona um Objeto DocumentosFuncionario de outros Objetos do tipo Documento
    * a SESSION Funcionário.
    * Em caso de funcionário do sexo feminino, faz a verifcação da Reservista
    * que no caso não é o brigatório
    *
    * @method mixed setDocumentosFuncionario()
    * @return void
    */
   private function setDocumentosFuncionario(){
        $documentosf = new DocumentosFuncionario();

        $cpf = $_POST['cpf'];
        $pispasep = $_POST['pisPasep'];
        $documentosf->ctps->numero = $_POST['numeroCtps'];
        $documentosf->ctps->serie = $_POST['serieCtps'];
        $documentosf->rg->numero = $_POST['numeroRg'];
        $documentosf->rg->orgaoexp = $_POST['orgaoExpRg'];
        $documentosf->rg->dataexp = $_POST['dataExpRg'];
        $documentosf->rg->estadoexp = $_POST['ufExpRg'];
        $documentosf->tituloeleitor->numero = $_POST['numeroTit'];
        $documentosf->tituloeleitor->secao = $_POST['secaoTit'];
        $documentosf->tituloeleitor->zona = $_POST['zonaTit'];

        if($_SESSION['funcionario']->sexo == 'M'){

            $documentosf->reservista->numero = $_POST['numeroRes'];
            $documentosf->reservista->categoria = $_POST['categoriaRes'];
            $documentosf->reservista->serie = $_POST['serieRes'];

        }else if($_SESSION['funcionario']->sexo == 'F'){
            isset($_POST['numeroRes']) ? $documentosf->reservista->numero = $_POST['numeroRes'] : 
                                         $documentosf->reservista->numero ="";

            isset($_POST['CategoriaRes']) ? $documentosf->reservista->categoria = $_POST['CategoriaRes'] : 
                                            $documentosf->reservista->categoria = "";
                                            
            isset($_POST['serieRes']) ? $documentosf->reservista->serie = $_POST['serieRes'] : 
                                        $documentosf->reservista->serie = "";
        }
        $_SESSION['funcionario']->cpf = $cpf;
        $_SESSION['funcionario']->pispasep = $pispasep;
        $_SESSION['funcionario']->documentos = $documentosf;
   }

   /**
    * Adiciona um Objeto DadosFuncionais SESSION Funcionário.
    *
    * @method mixed setDadosFuncionais()
    * @return void
    */
   private function setDadosFuncionais(){
        $dadosFuncionaisF = new DadosFuncionais();
                    
        if(empty($_POST['formacaoAcademicaFun'])){

            $dadosFuncionaisF->formacaoacademica = '-';

        }else{

            $dadosFuncionaisF->formacaoacademica = $_POST['formacaoAcademicaFun'];

        }
        
        $dadosFuncionaisF->matricula = $_POST['matriculaFun'];
        $dadosFuncionaisF->dataadmissao = $_POST['dataAdmissaoFun'];
        $dadosFuncionaisF->escolaridade = $_POST['escolaridadeFun'];
        $dadosFuncionaisF->anoconclusao = $_POST['anoConclusaoFun'];
        $dadosFuncionaisF->cargo = $_POST['cargoFun'];
        $dadosFuncionaisF->funcao = $_POST['funcaoFun'];

        $_SESSION['funcionario']->dadosfuncionais = $dadosFuncionaisF;
   }
}