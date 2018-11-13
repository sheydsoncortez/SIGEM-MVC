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
        $matriculaAluno = $_SESSION['aluno']->matriculaaluno;
        $nomeAluno = $_SESSION['aluno']->nomealuno;
        $dataNascAluno = $_SESSION['aluno']->datanascaluno;
        $cidadeNascAluno = $_SESSION['aluno']->cidadenascaluno;
        $estadoNascAluno = $_SESSION['aluno']->estadonascaluno;
        $corAluno = $_SESSION['aluno']->coraluno;
        $sexoAluno = $_SESSION['aluno']->sexoaluno;
        $pcdAluno = $_SESSION['aluno']->pcdaluno;
        $ativo = $_SESSION['aluno']->ativo;

        //Escola
        $codigoEscola = $_SESSION['aluno']->codigoescola;

        //Filiação
        $codigoFiliacao = $_SESSION['aluno']->filiacaoaluno->codigo;
        $nomePaiAluno = $_SESSION['aluno']->filiacaoaluno->nomepaialuno;
        $profissaoPaiAluno = $_SESSION['aluno']->filiacaoaluno->profissaopai;
        $rgNumPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->numero;
        $rgOrgaoPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->orgaoexp;
        $rgDataPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->dataexp;
        $rgUfPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->estadoexp;
        $nomeMaeAluno = $_SESSION['aluno']->filiacaoaluno->nomemaealuno;
        $profissaoMaeAluno = $_SESSION['aluno']->filiacaoaluno->profissaomae;
        $rgNumMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgmaealuno->rg->numero;
        $rgOrgaoMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->orgaoexp;
        $rgDataMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->dataexp;
        $rgUfMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->rg->estadoexp;

        //Documentos Aluno
        $rgNumAluno = $_SESSION['aluno']->documentosaluno->rg->numero;
        $rgOrgaoAluno = $_SESSION['aluno']->documentosaluno->rg->orgaoexp;
        $rgDataAluno = $_SESSION['aluno']->documentosaluno->rg->dataexp;
        $rgUfAluno = $_SESSION['aluno']->documentosaluno->rg->estadoexp;
        $titNumAluno = $_SESSION['aluno']->documentosaluno->tituloeleitor->numero;
        $titSecaoAluno = $_SESSION['aluno']->documentosaluno->tituloeleitor->secao;
        $titZonaAluno = $_SESSION['aluno']->documentosaluno->tituloeleitor->zona;
        $codigoReg = $_SESSION['aluno']->documentosaluno->registronascimento->codigo;
        $regNumAluno = $_SESSION['aluno']->documentosaluno->registronascimento->numeroregistro;
        $regLivroAluno = $_SESSION['aluno']->documentosaluno->registronascimento->livro;
        $regFolhaAluno = $_SESSION['aluno']->documentosaluno->registronascimento->folha;
        $regDataAluno = $_SESSION['aluno']->documentosaluno->registronascimento->data;
        $regCartorioAluno = $_SESSION['aluno']->documentosaluno->registronascimento->cartorio;
        $regCidadeAluno = $_SESSION['aluno']->documentosaluno->registronascimento->cidade;
        $regUfAluno = $_SESSION['aluno']->documentosaluno->registronascimento->uf;

        //Teste de sexo para reservista
        if($sexoaluno == 'M'){
            
            $resNumAluno = $_SESSION['aluno']->documentosaluno->reservista->numero;
            $resCatAluno = $_SESSION['aluno']->documentosaluno->reservista->categoria;
            $resSerieAluno = $_SESSION['aluno']->documentosaluno->reservista->serie;

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
        $ativo = true;

        //Variaveis para insert no banco
        $insert_rgAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumAluno}', '{$rgOrgaoAluno}', '$rgDataAluno', '{$rgUfAluno}');";
        
        $insert_rgPaiAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumPaiAluno}', '{$rgOrgaoPaiAluno}', '$rgDataPaiAluno', '{$rgUfPaiAluno}');";

        $insert_rgMaeAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumMaeAluno}', '{$rgOrgaoMaeAluno}', '{$rgDataMaeAluno}', '{$rgUfMaeAluno}');"; 

        $insert_regAluno = "INSERT INTO public.registroNasc(numeroRegistro, livro, folha, dataReg,
                            cartorio, cidade, uf)
                            VALUES ('{$regNumAluno}', '{$regLivroAluno}', '{$regFolhaAluno}', '{$regDataAluno}',
                            '{$regCartorioAluno}', '{$regCidadeAluno}', '{$regUfAluno}');";
        
        $insert_titAluno = "INSERT INTO public.tituloeleitor(numero, zona, secao)
                            VALUES ('{$titNumAluno}', '{$titZonaAluno}', '{$titSecaoAluno}');";
        
        $insert_filAluno = "INSERT INTO public.filiacao(nomepaialuno, nomemaealuno, profissaopai,
                            profissaomae, rgpaialuno, rgmaealuno)
                            VALUES ('{$nomePaiAluno}', '{$nomeMaeAluno}', '{$profissaoPaiAluno}',
                            '{$profissaoMaeAluno}', '{$rgNumPaiAluno}', '{$rgNumMaeAluno}');";
        
        $insert_aluno = "INSERT INTO public.aluno(matriculaaluno, nomealuno, datanascaluno, cidadenascaluno,
                        estadonascaluno, coraluno, sexoaluno, pcdaluno, ativo, rg, registronascimento,
                        tituloeleitor, reservista, filiacaoaluno)
                        VALUES ('{$matriculaAluno}', '{$nomeAluno}', '{$dataNascAluno}', '{$cidadeNascAluno}',
                        '{$estadoNascAluno}', '{$corAluno}', '{$sexoAluno}', '{$pcdAluno}', '{$ativo}',
                        '{$rgNumAluno}', '{$codigoReg}', '{$titNumAluno}', '{$resNumAluno}', '{$codigoFiliacao}');";

        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $this->db->prepare($insert_rgAluno);
            $query->execute();
            
            $query = $this->db->prepare($insert_rgPaiAluno);
            $query->execute();

            $query = $this->db->prepare($insert_rgMaeAluno);
            $query->execute();

            $query = $this->db->prepare($insert_regAluno);
            $query->execute();

            $query = $this->db->prepare($insert_titAluno);
            $query->execute();
            
            $query = $this->db->prepare($insert_filAluno);
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

    public function listarTodos(){
        $sql_aluno = "SELECT * FROM public.aluno WHERE ativo=true";
        $query = $this->db->query($sql_aluno);
        
        return  $query->fetchAll(\PDO::FETCH_OBJ);   
    }
}