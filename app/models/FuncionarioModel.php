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



        $cpf = $_SESSION['funcionario']->getDocumentos()->getCpf();
        $pispasep = $_SESSION['funcionario']->getDocumentos()->getPispasep();
        $nome = $_SESSION['funcionario']->getNome();
        $dataNasc = $_SESSION['funcionario']->getDatanasc();
        $cidadeNasc = $_SESSION['funcionario']->getCidadenasc();
        $ufNasc = $_SESSION['funcionario']->getEstadonasc();
        $nomePai = $_SESSION['funcionario']->getNomepai();
        $nomeMae = $_SESSION['funcionario']->getNomemae();
        $sexo = $_SESSION['funcionario']->getSexo();
        $estadoCivil = $_SESSION['funcionario']->getEstadocivil();
        $telefone = $_SESSION['funcionario']->getTelefone();
        $email = $_SESSION['funcionario']->getEmail();

        $enderecoCod = $cpf;
        $enderecoCep = $_SESSION['funcionario']->getEndereco()->getCep();
        $enderecoCidade = $_SESSION['funcionario']->getEndereco()->getCidade();
        $enderecoLogradouro = $_SESSION['funcionario']->getEndereco()->getLogradouro();
        $enderecoNum = $_SESSION['funcionario']->getEndereco()->getNumero();
        $enderecoBairro = $_SESSION['funcionario']->getEndereco()->getBairro();
        $enderecoUf = $_SESSION['funcionario']->getEndereco()->getEstado();

        $ctpsNum = $_SESSION['funcionario']->getDocumentos()->getCtps()->getNumero();
        $ctpsSerie = $_SESSION['funcionario']->getDocumentos()->getCtps()->getSerie();
        $rgNum = $_SESSION['funcionario']->getDocumentos()->getRg()->getNumero();
        $rgOrgao = $_SESSION['funcionario']->getDocumentos()->getRg()->getOrgaoexp();
        $rgDataExp = $_SESSION['funcionario']->getDocumentos()->getRg()->getDataexp();
        $rgUfExp = $_SESSION['funcionario']->getDocumentos()->getRg()->getUfexp();
        $titNum = $_SESSION['funcionario']->getDocumentos()->getTituloeleitor()->getNumero();
        $titSecao = $_SESSION['funcionario']->getDocumentos()->getTituloeleitor()->getSecao();
        $titZona = $_SESSION['funcionario']->getDocumentos()->getTituloeleitor()->getZona();
        $resNum = $_SESSION['funcionario']->getDocumentos()->getReservista()->getNumero();
        $resCat = $_SESSION['funcionario']->getDocumentos()->getReservista()->getCategoria();
        $resSerie = $_SESSION['funcionario']->getDocumentos()->getReservista()->getSerie();

        
        $formAcad = $_SESSION['funcionario']->getDadosfuncionais()->getFormacaoacademica();
        $matricula = $_SESSION['funcionario']->getDadosfuncionais()->getMatricula();
        $dataAdmis = $_SESSION['funcionario']->getDadosfuncionais()->getDataadmissao();
        $escolaridade = $_SESSION['funcionario']->getDadosfuncionais()->getEscolaridade();
        $anoConclusao = $_SESSION['funcionario']->getDadosfuncionais()->getAnoconclusao();
        $cargo = $_SESSION['funcionario']->getDadosfuncionais()->getCargo();
        $funcao = $_SESSION['funcionario']->getDadosfuncionais()->getFuncao();

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
                                 VALUES ('{$titNum}', {$titZona}, {$titSecao});";
        
        $insert_reservista = "INSERT INTO public.reservista(numero, categoria, serie)
                              VALUES ('{$resNum}', '{$resCat}','{$resSerie}');";
        
        $insert_funcionario = "INSERT INTO public.funcionario(
                                cpf, nome, datanasc, cidadenasc, estadonasc, nomepai, nomemae, 
                                sexo, estadocivil, telefone, email, pispasep, matricula, dataadmissao, 
                                escolaridade, formacaoacademica, anoconclusao, cargo, funcao, endereco, 
                                ctps, rg, tituloeleitor, reservista, senha, escola, ativo)
                               VALUES 
                                ('{$cpf}', '{$nome}', '{$dataNasc}', '{$cidadeNasc}', '{$ufNasc}', '{$nomePai}', 
                                '{$nomeMae}', '{$sexo}', '{$estadoCivil}', '{$telefone}', '{$email}', '{$pispasep}', 
                                '{$matricula}', '$dataAdmis', '{$escolaridade}', '{$formAcad}', {$anoConclusao}, 
                                '{$cargo}', '{$funcao}', '{$enderecoCod}', '{$ctpsNum}', '{$rgNum}', '{$titNum}', 
                                '{$resNum}', md5('{$cpf}'), '{$escola}', '{$ativo}');";

        echo $insert_funcionario;

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

            $query = $this->db->prepare($insert_reservista);
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

        return $f;
    }

    
    public function listarTodos(){
        
        $sql_funcionario = "SELECT * FROM public.funcionario WHERE ativo=true";
        $query = $this->db->query($sql_funcionario);
        
        return  $query->fetchAll(\PDO::FETCH_OBJ);        
    }

}