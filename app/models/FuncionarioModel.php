<?php

namespace app\models;

use app\core\Model;

error_reporting(E_ERROR);

class FuncionarioModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){

        $status = array();

        //$fun = new Funcionario();
        //$fun = $_SESSION['funcionario'];

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

        if($sexo == 'M'){
            
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
    }

    public function update($a = array()){
        //echo "<pre>";

        $f = $_SESSION['funcionario'];

        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $upct_sql = 'UPDATE public.ctps SET numero=:numero, serie=:serie WHERE numero=:ctps_id';


            $query = $this->db->prepare($upct_sql);
            $query->bindValue(':numero', $f->documentos->ctps->numero);
            $query->bindValue(':serie', $f->documentos->ctps->serie);
            $query->bindValue(':ctps_id', $a['ctps_id']);
            $query->execute();
            $query->errorInfo();


            $upen_sql = 'UPDATE public.endereco SET cep=:cep, cidade=:cidade, logradouro=:logradouro, numero=:numero, bairro=:bairro, estado=:estado WHERE codigo=:endereco_id';

            $query = $this->db->prepare($upen_sql);
            $query->bindValue(':cep', $f->endereco->cep);
            $query->bindValue(':cidade', $f->endereco->cidade);
            $query->bindValue('logradouro', $f->endereco->logradouro);
            $query->bindValue(':numero', $f->endereco->numero);
            $query->bindValue(':bairro', $f->endereco->bairro);
            $query->bindValue(':estado', $f->endereco->estado);
            $query->bindValue('endereco_id', $a['endereco_id']);
            $query->execute();
            $query->errorInfo();

            $upre_sql = 'UPDATE public.reservista SET numero=:numero, categoria=:categoria, serie=:serie WHERE numero=:reservista_id';

            $query = $this->db->prepare($upre_sql);
            $query->bindValue(':numero', $f->documentos->reservista->numero);
            $query->bindValue(':categoria', $f->documentos->reservista->categoria);
            $query->bindValue(':serie', $f->documentos->reservista->serie);
            $query->bindValue(':reservista_id', $a['reservista_id']);
            $query->execute();
            $query->errorInfo();

            $uprg_sql = 'UPDATE public.rg SET numero=:numero, orgaoexp=:orgaoexp, dataexp=:dataexp, ufexp=:ufexp WHERE numero=:rg_id';

            $query = $this->db->prepare($uprg_sql);
            $query->bindValue(':numero', $f->documentos->rg->numero);
            $query->bindValue(':orgaoexp', $f->documentos->rg->orgaoexp);
            $query->bindValue(':dataexp', $f->documentos->rg->dataexp);
            $query->bindValue(':ufexp', $f->documentos->rg->ufexp);
            $query->bindValue(':rg_id', $a['rg_id']);
            $query->execute();
            $query->errorInfo();

            $upti_sql = 'UPDATE public.tituloeleitor SET numero=:numero, zona=:zona, secao=:secao WHERE numero=:titulo_id';

            $query = $this->db->prepare($upti_sql);
            $query->bindValue(':numero', $f->documentos->tituloeleitor->numero);
            $query->bindValue(':zona', $f->documentos->tituloeleitor->zona);
            $query->bindValue(':secao', $f->documentos->tituloeleitor->secao);
            $query->bindValue(':titulo_id', $a['titulo_id']);
            $query->execute();
            $query->errorInfo();

            $upfu_sql = 'UPDATE public.funcionario SET cpf=:cpf, nome=:nome, datanasc=:datanasc, cidadenasc=:cidadenasc, estadonasc=:estadonasc, nomepai=:nomepai, nomemae=:nomemae, sexo=:sexo, estadocivil=:estadocivil, telefone=:telefone, email=:email, pispasep=:pispasep, matricula=:matricula, dataadmissao=:dataadmissao, escolaridade=:escolaridade, formacaoacademica=:formacaoacademica, anoconclusao=:anoconclusao, cargo=:cargo, funcao=:funcao WHERE cpf=:funcionario_id';

            $query = $this->db->prepare($upfu_sql);
            $query->bindValue(':cpf', $f->documentos->cpf);
            $query->bindValue(':nome', $f->nome);
            $query->bindValue(':datanasc', $f->datanasc);
            $query->bindValue(':cidadenasc', $f->cidadenasc);
            $query->bindValue(':estadonasc', $f->estadonasc);
            $query->bindValue(':nomepai', $f->nomepai);
            $query->bindValue(':nomemae', $f->nomemae);
            $query->bindValue(':sexo', $f->sexo);
            $query->bindValue(':estadocivil', $f->estadocivil);
            $query->bindValue(':telefone', $f->telefone);
            $query->bindValue(':email', $f->email);
            $query->bindValue(':pispasep', $f->documentos->pispasep);
            $query->bindValue(':matricula', $f->dadosfuncionais->matricula);
            $query->bindValue(':dataadmissao', $f->dadosfuncionais->dataadmissao);
            $query->bindValue(':escolaridade', $f->dadosfuncionais->escolaridade);
            $query->bindValue(':formacaoacademica', $f->dadosfuncionais->formacaoacademica);
            $query->bindValue(':anoconclusao', $f->dadosfuncionais->anoconclusao);
            $query->bindValue(':cargo', $f->dadosfuncionais->cargo);
            $query->bindValue(':funcao', $f->dadosfuncionais->funcao);
            $query->bindValue(':funcionario_id', $a['funcionario_id']);
            $query->execute();
            $query->errorInfo();

            unset($_SESSION['funcionario']);

            return $this->getFuncionario($f->documentos->cpf);

        }catch (\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao inserir funcionário" . $e->getMessage();

            return $status;
        }

    }

    public function remover($cpf){

        $status = array();

        try{
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $upfu_sql = 'UPDATE public.funcionario SET ativo=false WHERE cpf=:cpf';

            $query = $this->db->prepare($upfu_sql);
            $query->bindValue(':cpf', $cpf);
            $query->execute();
            $query->errorInfo();

            $status["status"] = true;
            $status["msn"] = "Funcionário removido";

            return $status;

        }catch (\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao remover funcionário" . $e->getMessage();

            return $status;

        }

    }

    public function getFuncionario($cpf)
    {

        $sql_funcionario = "SELECT  cpf, nome, to_char(\"datanasc\", 'DD/MM/YYYY') as datanasc, cidadenasc, estadonasc, nomepai, nomemae, sexo, estadocivil, telefone, email, pispasep, endereco, ctps, rg, tituloeleitor, reservista, senha, escola, ativo FROM public.funcionario WHERE cpf='{$cpf}' AND ativo=true";

        $query = $this->db->query($sql_funcionario);

        if ($query->rowCount() == 1) {

            $f = $query->fetch(\PDO::FETCH_OBJ);

            $sql_end = "SELECT cep, cidade, logradouro, numero, bairro, estado FROM public.endereco WHERE codigo='{$f->endereco}'";

            $query = $this->db->query($sql_end);
            $f->endereco = $query->fetch(\PDO::FETCH_OBJ);

            $f->documentos->cpf = $f->cpf;
            $f->documentos->pispasep = $f->pispasep;

            $sql_ctps = "SELECT * FROM public.ctps WHERE numero='{$f->ctps}'";

            $query = $this->db->query($sql_ctps);
            $f->documentos->ctps = $query->fetch(\PDO::FETCH_OBJ);

            $sql_res = "SELECT * FROM public.reservista WHERE numero='{$f->reservista}'";

            $query = $this->db->query($sql_res);
            $f->documentos->reservista = $query->fetch(\PDO::FETCH_OBJ);

            $sql_rg = "SELECT numero, orgaoexp, to_char(\"dataexp\", 'DD/MM/YYYY') as dataexp, ufexp FROM public.rg WHERE numero='{$f->rg}'";

            $query = $this->db->query($sql_rg);
            $f->documentos->rg = $query->fetch(\PDO::FETCH_OBJ);

            $sql_tit = "SELECT * FROM public.tituloeleitor WHERE numero='{$f->tituloeleitor}'";

            $query = $this->db->query($sql_tit);
            $f->documentos->tituloeleitor = $query->fetch(\PDO::FETCH_OBJ);

            $sql_dadosfuncionais = "SELECT matricula, to_char(\"dataadmissao\", 'DD/MM/YYYY') as dataadmissao, escolaridade, formacaoacademica, anoconclusao, cargo, funcao FROM funcionario WHERE cpf='{$cpf}' AND ativo=true";

            $query = $this->db->query($sql_dadosfuncionais);
            $f->dadosfuncionais = $query->fetch(\PDO::FETCH_OBJ);

            unset($_SESSION['funcionario']);

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