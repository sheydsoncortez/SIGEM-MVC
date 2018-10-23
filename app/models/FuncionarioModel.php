<?php

namespace app\models;

use app\core\Model;
use app\classes\Funcionario;
use app\classes\Endereco;
use app\classes\DocumentosFuncionario;
use app\classes\DadosFuncionais;

error_reporting(E_ERROR);

class FuncionarioModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){

        $status = array();

        $fun = new Funcionario();
        $fun = $_SESSION['funcionario'];



        $cpf = $_SESSION['funcionario']->documentos->cpf;
        $pispasep = $_SESSION['funcionario']->documentos->pispasep;
        $nome = $_SESSION['funcionario']->nome;
        $dataNasc = $_SESSION['funcionario']->datanasc;
        $cidadeNasc = $_SESSION['funcionario']->cidadenasc;
        $ufNasc = $_SESSION['funcionario']->estadonasc;
        $nomePai = $_SESSION['funcionario']->nomepai;
        $nomeMae = $_SESSION['funcionario']->nomemae;
        $sexo = $_SESSION['funcionario']->sexo;
        $estadoCivil = $_SESSION['funcionario']->estadocivil;
        $telefone = $_SESSION['funcionario']->telefone;
        $email = $_SESSION['funcionario']->email;

        $enderecoCod = $cpf;
        $enderecoCep = $_SESSION['funcionario']->endereco->cep;
        $enderecoCidade = $_SESSION['funcionario']->endereco->cidade;
        $enderecoLogradouro = $_SESSION['funcionario']->endereco->logradouro;
        $enderecoNum = $_SESSION['funcionario']->endereco->numero;
        $enderecoBairro = $_SESSION['funcionario']->endereco->bairro;
        $enderecoUf = $_SESSION['funcionario']->endereco->estado;

        $ctpsNum = $_SESSION['funcionario']->documentos->ctps->numero;
        $ctpsSerie = $_SESSION['funcionario']->documentos->ctps->serie;
        $rgNum = $_SESSION['funcionario']->documentos->rg->numero;
        $rgOrgao = $_SESSION['funcionario']->documentos->rg->orgaoexp;
        $rgDataExp = $_SESSION['funcionario']->documentos->rg->dataexp;
        $rgUfExp = $_SESSION['funcionario']->documentos->rg->estadoexp;
        $titNum = $_SESSION['funcionario']->documentos->tituloeleitor->numero;
        $titSecao = $_SESSION['funcionario']->documentos->tituloeleitor->secao;
        $titZona = $_SESSION['funcionario']->documentos->tituloeleitor->zona;

        if(sexo == 'M'){
            
            $resNum = $_SESSION['funcionario']->documentos->reservista->numero;
            $resCat = $_SESSION['funcionario']->documentos->reservista->categoria;
            $resSerie = $_SESSION['funcionario']->documentos->reservista->serie;

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
        
        $formAcad = $_SESSION['funcionario']->dadosfuncionais->formacaoacademica;
        $matricula = $_SESSION['funcionario']->dadosfuncionais->matricula;
        $dataAdmis = $_SESSION['funcionario']->dadosfuncionais->dataadmissao;
        $escolaridade = $_SESSION['funcionario']->dadosfuncionais->escolaridade;
        $anoConclusao = $_SESSION['funcionario']->dadosfuncionais->anoconclusao;
        $cargo = $_SESSION['funcionario']->dadosfuncionais->cargo;
        $funcao = $_SESSION['funcionario']->dadosfuncionais->funcao;

        $escola = "24032239";
        $ativo = '1';

        $insert_endereco = "INSERT INTO public.endereco
                            (codigo, cep, cidade, logradouro, numero, bairro, estado) 
                            VALUES 
                            ('{$enderecoCod}','{$enderecoCep}' , '{$enderecoCidade}', '{$enderecoLogradouro}', 
                            '{$enderecoNum}', '{$enderecoBairro}', '{$enderecoUf}');";

        $insert_carteiraprof = "INSERT INTO public.ctps(numero, serie) 
                                VALUES ('{$ctpsNum}', '{$ctpsSerie}');";

        $insert_rg = "INSERT INTO public.rg(numero, orgaoexp, dataexp, ufexp)
                      VALUES ('{$rgNum}', '{$rgOrgao}', '$rgDataExp', '{$rgUfExp}');";
        
        $insert_tituloeleitor = "INSERT INTO public.tituloeleitor(numero, zona, secao)
                                 VALUES ('{$titNum}', '{$titZona}', '{$titSecao}');";

        
        $insert_funcionario = "INSERT INTO public.funcionario(
                                cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, 
                                sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, 
                                escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, 
                                ctps, rg, tituloeleitor, reservista, senha, escola, ativo)
                               VALUES 
                                ('{$cpf}', '{$nome}', '{$dataNasc}', '{$cidadeNasc}', '{$ufNasc}', '{$nomePai}', 
                                '{$nomeMae}', '{$sexo}', '{$estadoCivil}', '{$telefone}', '{$email}', '{$pispasep}', 
                                '{$matricula}', '$dataAdmis', '{$escolaridade}', '{$formAcad}', '{$anoConclusao}', 
                                '{$cargo}', '{$funcao}', '{$enderecoCod}', '{$ctpsNum}', '{$rgNum}', '{$titNum}', 
                                '{$resNum}', md5('{$cpf}'), '{$escola}', '{$ativo}');";

        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $this->db->prepare($insert_endereco);
            $query->execute();

            $query = $this->db->prepare($insert_carteiraprof);
            $query->execute();

            $query = $this->db->prepare($insert_rg);
            $query->execute();

            $query = $this->db->prepare($insert_tituloeleitor);
            $query->execute();

            $query = $this->db->prepare($insert_funcionario);
            $query->execute();


            $status["status"] = true;

            $status["msn"] = "Funcionário inserido com Sucesso.";
            $status["cpf"] = $cpf;

            unset($_SESSION['funcionario']);

            return $status ;

        }
        catch(\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao inserir funcionário" . $e->getMessage();

            return $status;
        }
        return $status;
    }
    
    public function getFuncionario($cpf)
    {

        $sql_funcionario = "SELECT * FROM public.funcionario WHERE cpf='{$cpf}' AND ativo=true";

        $query = $this->db->query($sql_funcionario);

        if ($query->rowCount() == 1) {

            $f = $query->fetch(\PDO::FETCH_OBJ);

            $sql_end = "SELECT cep, cidade, logradouro, numero, bairro, estado
                         FROM public.endereco WHERE codigo='{$f->endereco}'";
            $query = $this->db->query($sql_end);
            $f->endereco = $query->fetch(\PDO::FETCH_OBJ);

            $sql_ctps = "SELECT * FROM public.ctps WHERE numero='{$f->ctps}'";
            $query = $this->db->query($sql_ctps);
            $f->documentos->ctps = $query->fetch(\PDO::FETCH_OBJ);

            $sql_res = "SELECT * FROM public.reservista WHERE numero='{$f->reservista}'";
            $query = $this->db->query($sql_res);
            $f->documentos->reservista = $query->fetch(\PDO::FETCH_OBJ);

            $sql_rg = "SELECT * FROM public.rg WHERE numero='{$f->rg}'";
            $query = $this->db->query($sql_rg);
            $f->documentos->rg = $query->fetch(\PDO::FETCH_OBJ);

            $sql_tit = "SELECT * FROM public.tituloeleitor WHERE numero='{$f->tituloeleitor}'";
            $query = $this->db->query($sql_tit);
            $f->documentos->tituloeleitor = $query->fetch(\PDO::FETCH_OBJ);

        }else{
            $f = false;
        }

        //echo"<pre>";
        //print_r($f);

        return $f;
    }

    
    public function listarTodos(){
        
        $sql_funcionario = "SELECT * FROM public.funcionario WHERE ativo=true";
        $query = $this->db->query($sql_funcionario);
        
        return  $query->fetchAll(\PDO::FETCH_OBJ);        
    }

}