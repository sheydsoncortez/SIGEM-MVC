<?php

namespace app\models;

use app\core\Model;
use app\classes\Aluno;
use app\classes\Rg;
use app\classes\DocumentosAluno;

error_reporting(E_ERROR);

class AlunoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){
        $status = array();

        $aluno = new Aluno();
        $aluno = $_SESSION['aluno'];
        
        //Dados do aluno
        $matriculaAluno = $_SESSION['aluno']->matriculaAluno;
        $nomeAluno = $_SESSION['aluno']->nomeAluno;
        $dataNascAluno = $_SESSION['aluno']->dataNascAluno;
        $cidadeNascAluno = $_SESSION['aluno']->cidadeNascAluno;
        $estadoNascAluno = $_SESSION['aluno']->estadoNascAluno;
        $corAluno = $_SESSION['aluno']->corAluno;
        $sexoAluno = $_SESSION['aluno']->sexoAluno;
        $pcdAluno = $_SESSION['aluno']->pcdAluno;
        $statusAluno = $_SESSION['aluno']->statusAluno;

        //Escola
        $codigoEscola = $_SESSION['aluno']->codigoEscola;

        //Filiação
        $nomePaiAluno = $_SESSION['aluno']->nomePaiAluno;
        $profissaoPaiAluno = $_SESSION['aluno']->profissaoPaiAluno;
        $rgNumPaiAluno = $_SESSION['aluno']->rgPaiAluno->rg->numero;
        $rgOrgaoPaiAluno = $_SESSION['aluno']->rgPaiAluno->rg->orgaoexp;
        $rgDataPaiAluno = $_SESSION['aluno']->rgPaiAluno->rg->dataexp;
        $rgUfPaiAluno = $_SESSION['aluno']->rgPaiAluno->rg->estadoexp;
        $nomeMaeAluno = $_SESSION['aluno']->nomeMaeAluno;
        $profissaoMaeAluno = $_SESSION['aluno']->profissaoMaeAluno;
        $rgNumMaeAluno = $_SESSION['aluno']->rgMaeAluno->rg->numero;
        $rgOrgaoMaeAluno = $_SESSION['aluno']->rgMaeAluno->rg->orgaoexp;
        $rgDataMaeAluno = $_SESSION['aluno']->rgMaeAluno->rg->dataexp;
        $rgUfMaeAluno = $_SESSION['aluno']->rgMaeAluno->rg->estadoexp;

        //Documentos Aluno
        $rgNumAluno = $_SESSION['aluno']->documentosAluno->rg->numero;
        $rgOrgaoAluno = $_SESSION['aluno']->documentosAluno->rg->orgaoexp;
        $rgDataAluno = $_SESSION['aluno']->documentosAluno->rg->dataexp;
        $rgUfAluno = $_SESSION['aluno']->documentosAluno->rg->estadoexp;
        $titNumAluno = $_SESSION['aluno']->documentosAluno->tituloEleitoral->numero;
        $titSecaoAluno = $_SESSION['aluno']->documentosAluno->tituloEleitoral->secao;
        $titZonaAluno = $_SESSION['aluno']->documentosAluno->tituloEleitoral->zona;
        $regNumAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->numeroRegistro;
        $regLivroAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->livro;
        $regFolhaAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->folha;
        $regDataAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->data;
        $regCartorioAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->cartorio;
        $regCidadeAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->cidade;
        $regUfAluno = $_SESSION['aluno']->documentosAluno->registroNascimento->uf;

        //Teste de sexo para reservista
        if($sexo == 'M'){
            
            $resNumAluno = $_SESSION['aluno']->documentos->reservista->numero;
            $resCatAluno = $_SESSION['aluno']->documentos->reservista->categoria;
            $resSerieAluno = $_SESSION['aluno']->documentos->reservista->serie;

            $insert_reservista = "INSERT INTO public.reservista(numero, categoria, serie)
                              VALUES ('{$resNum}', '{$resCat}','{$resSerie}');";

            try{

                $query = $this->db->prepare($insert_reservista);
                $query->execute();

            }catch(\PDOException $e){
                echo "erro ao inserir reservista";
            }
        }else{

            $resNum = "000000000";

        }
    }
}