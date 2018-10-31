<?php

namespace app\models;

use app\core\Model;
use app\classes\Aluno;
use app\classes\FiliacaoAluno;
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
        $nomePaiAluno = $_SESSION['aluno']->filiacaoAluno->nomePaiAluno;
        $profissaoPaiAluno = $_SESSION['aluno']->filiacaoAluno->profissaoPaiAluno;
        $rgNumPaiAluno = $_SESSION['aluno']->filiacaoAluno->rgPaiAluno->rg->numero;
        $rgOrgaoPaiAluno = $_SESSION['aluno']->filiacaoAluno->rgPaiAluno->rg->orgaoexp;
        $rgDataPaiAluno = $_SESSION['aluno']->filiacaoAluno->rgPaiAluno->rg->dataexp;
        $rgUfPaiAluno = $_SESSION['aluno']->filiacaoAluno->rgPaiAluno->rg->estadoexp;
        $nomeMaeAluno = $_SESSION['aluno']->filiacaoAluno->nomeMaeAluno;
        $profissaoMaeAluno = $_SESSION['aluno']->filiacaoAluno->profissaoMaeAluno;
        $rgNumMaeAluno = $_SESSION['aluno']->filiacaoAluno->rgMaeAluno->rg->numero;
        $rgOrgaoMaeAluno = $_SESSION['aluno']->filiacaoAluno->rgMaeAluno->rg->orgaoexp;
        $rgDataMaeAluno = $_SESSION['aluno']->filiacaoAluno->rgMaeAluno->rg->dataexp;
        $rgUfMaeAluno = $_SESSION['aluno']->filiacaoAluno->rgMaeAluno->rg->estadoexp;

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
                              VALUES ('{$resNumAluno}', '{$resCatAluno}','{$resSerieAluno}');";

            try{

                $query = $this->db->prepare($insert_reservista);
                $query->execute();

            }catch(\PDOException $e){
                echo "erro ao inserir reservista";
            }
        }else{

            $resNum = "000000000";

        }

        //Status do Aluno
        $statusAluno = '1';

        //Variaveis para insert no banco
        $insert_aluno = "INSERT INTO public.aluno(matriculaAluno, nomeAluno, dataNascAluno, cidadeNascAluno,
                        estadoNascAluno, corAluno, sexoAluno, pcdAluno, statusAluno, rg, resgistroNascimento,
                        tituloEleitoral, reservista, rgPaiAluno, rgMaeAluno)
                        VALUES ('{$matriculaAluno}', '{$nomeAluno}', '{$dataNascAluno}', '{$cidadeNascAluno}',
                        '{$estadoNascAluno}', '{$corAluno}', '{$sexoAluno}', '{$pcdAluno}', '{$statusAluno}',
                        '{$rgNumAluno}', '{$regNumAluno}', '{$titNumAluno}', '{$resNumAluno}', '{$rgNumPaiAluno}', 
                        '{$rgNumMaeAluno}');";
        
        $insert_rgAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumAluno}', '{$rgOrgaoAluno}', '$rgDataAluno', '{$rgUfAluno}');";
        
        $insert_regAluno = "INSERT INTO public.registroNasc(numeroRegistro, livro, folha, dataReg,
                            cartorio, cidade, uf)
                            VALUES ('{$regNumAluno}', '{$regLivroAluno}', '{$regFolhaAluno}', '{$regDataAluno}',
                            '{$regCartorioAluno}', '{$regCidadeAluno}', '{$regUfAluno}');";
        
        $insert_titAluno = "INSERT INTO public.tituloeleitor(numero, zona, secao)
                            VALUES ('{$titNumAluno}', '{$titZonaAluno}', '{$titSecaoAluno}');";

        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $this->db->prepare($insert_rgAluno);
            $query->execute();

            $query = $this->db->prepare($insert_regAluno);
            $query->execute();

            $query = $this->db->prepare($insert_titAluno);
            $query->execute();

            $query = $this->db->prepare($insert_aluno);
            $query->execute();

            $status["status"] = true;

            $status["msn"] = "Aluno inserido com Sucesso.";
            $status["cpf"] = $cpf;

            unset($_SESSION['aluno']);

            return $status ;

        }
        catch(\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao inserir aluno." . $e->getMessage();

            return $status;
        }
        return $status;
    }

    public function getAluno(){
        return null;
    }

    public function listarTodos(){
        return null;
    }
}