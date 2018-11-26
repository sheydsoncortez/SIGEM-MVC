<?php

namespace app\models;

use app\core\Model;

error_reporting(E_ERROR);

class AlunoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){

        $status = array();

        //$aluno = new Aluno();
        //$aluno = $_SESSION['aluno'];
        
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
        //$codigoFiliacao = $_SESSION['aluno']->filiacaoaluno->codigo;
        $nomePaiAluno = $_SESSION['aluno']->filiacaoaluno->nomepaialuno;
        $profissaoPaiAluno = $_SESSION['aluno']->filiacaoaluno->profissaopai;
        $rgNumPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->numero;
        $rgOrgaoPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->orgaoexp;
        $rgDataPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->dataexp;
        $rgUfPaiAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->estadoexp;
        $nomeMaeAluno = $_SESSION['aluno']->filiacaoaluno->nomemaealuno;
        $profissaoMaeAluno = $_SESSION['aluno']->filiacaoaluno->profissaomae;
        $rgNumMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgmaealuno->numero;
        $rgOrgaoMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->orgaoexp;
        $rgDataMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->dataexp;
        $rgUfMaeAluno = $_SESSION['aluno']->filiacaoaluno->rgpaialuno->estadoexp;

        //Documentos Aluno
        $rgNumAluno = $_SESSION['aluno']->documentosaluno->rg->numero;
        $rgOrgaoAluno = $_SESSION['aluno']->documentosaluno->rg->orgaoexp;
        $rgDataAluno = $_SESSION['aluno']->documentosaluno->rg->dataexp;
        $rgUfAluno = $_SESSION['aluno']->documentosaluno->rg->estadoexp;
        $titNumAluno = $_SESSION['aluno']->documentosaluno->tituloeleitor->numero;
        $titSecaoAluno = $_SESSION['aluno']->documentosaluno->tituloeleitor->secao;
        $titZonaAluno = $_SESSION['aluno']->documentosaluno->tituloeleitor->zona;
        //$codigoReg = $_SESSION['aluno']->documentosaluno->registronascimento->codigo;
        $regNumAluno = $_SESSION['aluno']->documentosaluno->registronascimento->numeroregistro;
        $regLivroAluno = $_SESSION['aluno']->documentosaluno->registronascimento->livro;
        $regFolhaAluno = $_SESSION['aluno']->documentosaluno->registronascimento->folha;
        $regDataAluno = $_SESSION['aluno']->documentosaluno->registronascimento->data;
        $regCartorioAluno = $_SESSION['aluno']->documentosaluno->registronascimento->cartorio;
        $regCidadeAluno = $_SESSION['aluno']->documentosaluno->registronascimento->cidade;
        $regUfAluno = $_SESSION['aluno']->documentosaluno->registronascimento->uf;

        //Teste de sexo para reservista
        if($sexoAluno == 'M'){
            
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

            $resNumAluno = "000000000";

        }

        //Status do Aluno
        $ativo = true;

        //Variaveis para insert no banco
        $insert_filAluno = "INSERT INTO public.filiacao(nomepaialuno, nomemaealuno, profissaopai, profissaomae, 
                            rgpaialuno, rgmaealuno)
                             VALUES ('{$nomePaiAluno}', '{$nomeMaeAluno}', '{$profissaoPaiAluno}',
                            '{$profissaoMaeAluno}', '{$rgNumPaiAluno}', '{$rgNumMaeAluno}');";

        $insert_regAluno = "INSERT INTO public.registronascimento(numeroregistro, livro, folha, dataregistro,
                            cartorio, cidade, uf)
                            VALUES ('{$regNumAluno}', '{$regLivroAluno}', '{$regFolhaAluno}', '{$regDataAluno}',
                            '{$regCartorioAluno}', '{$regCidadeAluno}', '{$regUfAluno}');";
        
        $insert_rgPaiAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumPaiAluno}', '{$rgOrgaoPaiAluno}', '{$rgDataPaiAluno}', '{$rgUfPaiAluno}');";

        $insert_rgMaeAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumMaeAluno}', '{$rgOrgaoMaeAluno}', '{$rgDataMaeAluno}', '{$rgUfMaeAluno}');";

        try{
            $query = $this->db->prepare($insert_rgPaiAluno);
            $query->execute();

            $query = $this->db->prepare($insert_rgMaeAluno);
            $query->execute();

            $query = $this->db->prepare($insert_regAluno);
            $query->execute();
            $codigoReg = $this->db->lastInsertId();
            //echo($codigoReg);
            
            $query = $this->db->prepare($insert_filAluno);
            $query->execute();
            $codigoFiliacao = $this->db->lastInsertId();
            //echo($codigoFiliacao);

        }catch(\PDOException $e){
            $status["status"] = false;
            $status["msn"] = "Erro ao inserir aluno." . $e->getMessage();
            //echo($status["msn"]);
        }

        $insert_rgAluno = "INSERT INTO  public.rg(numero, orgaoexp, dataexp, ufexp)
                            VALUES ('{$rgNumAluno}', '{$rgOrgaoAluno}', '{$rgDataAluno}', '{$rgUfAluno}');"; 
        
        $insert_titAluno = "INSERT INTO public.tituloeleitor(numero, zona, secao)
                            VALUES ('{$titNumAluno}', '{$titZonaAluno}', '{$titSecaoAluno}');";
        
        $insert_aluno = "INSERT INTO public.aluno(matriculaaluno, nomealuno, datanascaluno, cidadenascaluno,
                        estadonascaluno, coraluno, sexoaluno, pcdaluno, ativo, rg, registronasc,
                        tituloeleitor, reservista, filiacaoaluno)
                        VALUES ('{$matriculaAluno}', '{$nomeAluno}', '{$dataNascAluno}', '{$cidadeNascAluno}',
                        '{$estadoNascAluno}', '{$corAluno}', '{$sexoAluno}', '{$pcdAluno}', '{$ativo}',
                        '{$rgNumAluno}', '{$codigoReg}', '{$titNumAluno}', '{$resNumAluno}', '{$codigoFiliacao}');";

        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $this->db->prepare($insert_rgAluno);
            $query->execute();

            $query = $this->db->prepare($insert_titAluno);
            $query->execute();

            $query = $this->db->prepare($insert_aluno);
            $query->execute();
            $query->errorInfo();

            $status["status"] = true;

            $status["msn"] = "Aluno inserido com Sucesso.";
            echo($status["msn"]);

            unset($_SESSION['aluno']);
            return $status ;

        }
        catch(\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao inserir aluno." . $e->getMessage();
            //echo($status["msn"]);

            return $status;
        }
        return $status;
    }

    public function update(){
        $a = $_SESSION['aluno'];
        $a_id = $_SESSION['a_id'];

        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $uprgaluno_sql = "UPDATE public.rg SET numero=:numero, orgaoexp=:orgaoexp, dataexp=:dataexp, ufexp=:ufexp WHERE numero=:rg_id";

            $query = $this->db->prepare($uprgaluno_sql);
            $query->bindValue(':numero', $a->documentosaluno->rg->numero);
            $query->bindValue(':orgaoexp', $a->documentosaluno->rg->orgaoexp);
            $query->bindValue(':dataexp', $a->documentosaluno->rg->dataexp);
            $query->bindValue(':ufexp', $a->documentosaluno->rg->ufexp);
            $query->bindValue(':rg_id', $a_id->rg);
            $query->execute();
            $query->errorInfo();

            $upreservistaaluno_sql = 'UPDATE public.reservista SET numero=:numero, categoria=:categoria, serie=:serie WHERE numero=:reservista_id';

            $query = $this->db->prepare($upreservistaaluno_sql);
            $query->bindValue(':numero', $a->documentosaluno->reservista->numero);
            $query->bindValue(':categoria', $a->documentosaluno->reservista->categoria);
            $query->bindValue(':serie', $a->documentosaluno->reservista->serie);
            $query->bindValue(':reservista_id', $a_id->reservista);
            $query->execute();
            $query->errorInfo();

            $upregaluno_sql = "UPDATE public.registronascimento SET numeroregistro=:numeroregistro, livro=:livro, folha=:folha, dataregistro=:dataregistro, cartorio=:cartorio, cidade=:cidade, uf=:uf WHERE codigo=:registronasc";
            
            $query = $this->db->prepare($upregaluno_sql);
            $query->bindValue(':numeroregistro', $a->documentosaluno->registronascimento->numeroregistro);
            $query->bindValue(':livro', $a->documentosaluno->registronascimento->livro);
            $query->bindValue(':folha', $a->documentosaluno->registronascimento->folha);
            $query->bindValue(':dataregistro', $a->documentosaluno->registronascimento->dataregistro);
            $query->bindValue(':cartorio', $a->documentosaluno->registronascimento->cartorio);
            $query->bindValue(':cidade', $a->documentosaluno->registronascimento->cidade);
            $query->bindValue(':uf', $a->documentosaluno->registronascimento->uf);
            $query->bindValue(':registronasc', $a_id->registronascimento);
            $query->execute();
            $query->errorInfo();

            $upti_sql = 'UPDATE public.tituloeleitor SET numero=:numero, zona=:zona, secao=:secao WHERE numero=:titulo_id';

            $query = $this->db->prepare($upti_sql);
            $query->bindValue(':numero', $a->documentosaluno->tituloeleitor->numero);
            $query->bindValue(':zona', $a->documentosaluno->tituloeleitor->zona);
            $query->bindValue(':secao', $a->documentosaluno->tituloeleitor->secao);
            $query->bindValue(':titulo_id', $a_id->tituloeleitor);
            $query->execute();
            $query->errorInfo();

            $uprgpai_sql = "UPDATE public.rg SET numero=:numero, orgaoexp=:orgaoexp, dataexp=:dataexp, ufexp=:ufexp WHERE numero=:rg_id";

            $query = $this->db->prepare($uprgpai_sql);
            $query->bindValue(':numero', $a->filiacaoaluno->rgpaialuno->numero);
            $query->bindValue(':orgaoexp', $a->filiacaoaluno->rgpaialuno->orgaoexp);
            $query->bindValue(':dataexp', $a->filiacaoaluno->rgpaialuno->dataexp);
            $query->bindValue(':ufexp', $a->filiacaoaluno->rgpaialuno->ufexp);
            $query->bindValue(':rg_id', $a_id->rgpaialuno);
            $query->execute();
            $query->errorInfo();

            $uprgmae_sql = "UPDATE public.rg SET numero=:numero, orgaoexp=:orgaoexp, dataexp=:dataexp, ufexp=:ufexp WHERE numero=:rg_id";

            $query = $this->db->prepare($uprgmae_sql);
            $query->bindValue(':numero', $a->filiacaoaluno->rgmaealuno->numero);
            $query->bindValue(':orgaoexp', $a->filiacaoaluno->rgmaealuno->orgaoexp);
            $query->bindValue(':dataexp', $a->filiacaoaluno->rgmaealuno->dataexp);
            $query->bindValue(':ufexp', $a->filiacaoaluno->rgmaealuno->ufexp);
            $query->bindValue(':rg_id', $a_id->rgmaealuno);
            $query->execute();
            $query->errorInfo();

            $upfiliacao_sql = "UPDATE public.filiacao SET nomepaialuno=:nomepaialuno, nomemaoaluno=:nomemaealuno, profissaopai=:profissaopai, profissaomae=:profissaomae, rgpaialuno=:rgpailauno, rgmaealuno=:rgmaealuno WHERE codigo=:filiacaoaluno";
            $query->bindValue(':nomepaialuno', $a->filiacaoaluno->nomepaialuno);
            $query->bindValue(':profissaopai', $a->filiacaoaluno->profissaopai);
            $query->bindValue(':nomemaealuno', $a->filiacaoaluno->nomemaealuno);
            $query->bindValue(':profissaomae', $a->filiacaoaluno->profissaomae);
            $query->bindValue(':rgpaialuno', $a->filiacaoaluno->rgpaialuno->numero);
            $query->bindValue(':rgmaealuno', $a->filiacaoaluno->rgmaealuno->numero);
            $query->bindValue(':filiacao_id', $a_id->filiacaoaluno);
            $query->execute();
            $query->errorInfo();

            $upaluno_sql = "UPDATE public.aluno SET matriculaaluno=:matriculaaluno, nomealuno=:nomealuno, datanascaluno=:datanascaluno, cidadenascaluno=:cidadenascaluno, estadonascaluno=:estadonascaluno, coraluno=:coraluno, sexoaluno=:sexoaluno, pcdaluno=:pcdaluno WHERE codigo=:aluno_id";

            $query->bindValue(':matriculaaluno', $a->matriculaaluno);
            $query->bindValue(':nomealuno', $a->nomealuno);
            $query->bindValue(':datanascaluno', $a->datanascaluno);
            $query->bindValue(':cidadenascaluno', $a->cidadenascaluno);
            $query->bindValue(':estadonascaluno', $a->estadonascaluno);
            $query->bindValue(':coraluno', $a->coraluno);
            $query->bindValue(':sexoaluno', $a->sexoaluno);
            $query->bindValue(':pcdaluno', $a->pcdaluno);
            $query->bindValue(':aluno_id', $a_id->codigo);
            $query->execute();
            $query->errorInfo();

            $status["status"] = true;
            $status["msn"] = "  <h4 style='color: #4e555b'>Os dados do Aluno(a)</h4> 
                                <b>Nome: </b>" .$a->nome. "</br> 
                                <b>RG: </b>". $a->documentosaluno->rg->numero. "</br>                               
                                <h4  style='color: #1c7430'>foram atualizados com sucesso! </h4>";

            unset($_SESSION['aluno']);
            unset($_SESSION['a_id']);

            return $status;
        }catch (\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao inserir aluno" . $e->getMessage();

            return $status;
        }
    }

    public function remover($codigo){

        $status = array();

        try{
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $upaluno_sql = 'UPDATE public.aluno SET ativo=false WHERE codgio=:codigo';

            $query = $this->db->prepare($upaluno_sql);
            $query->bindValue(':codigo', $codigo);
            $query->execute();
            $query->errorInfo();

            $status["status"] = true;
            $status["msn"] = "Aluno removido";

            return $status;

        }catch (\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao remover Aluno" . $e->getMessage();

            return $status;

        }

    }

    public function getAluno($codigo)
    {

        $sql_aluno = "SELECT  matriculaaluno, nomealuno, to_char(\"datanascaluno\", 'DD/MM/YYYY') as datanascaluno, cidadenascaluno, estadonascaluno, coraluno, sexoaluno, pcdaluno, telefone, rg, tituloeleitor, reservista, registronasc, filiacaoaluno, ativo, FROM public.aluno WHERE cpf='{$codigo}' AND ativo=true";

        $query = $this->db->query($sql_aluno);

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

    public function listarTodos($ativo){

        $sql_aluno = "SELECT * FROM public.aluno WHERE ativo=:ativo";

        switch ($ativo){
            case 'ativos':
                $status = '1';
                break;
            case 'inativos':
                $status = '0';
                break;
            case 'todos':
                $sql_aluno = "SELECT * FROM public.aluno WHERE ativo IS NOT NULL";
                $status = 'IS NOT NULL';
                break;
        }

        $query = $this->db->prepare($sql_aluno);
        $query->bindValue(':ativo', $ativo);
        $query->execute();
        
        return  $query->fetchAll(\PDO::FETCH_OBJ);        
    }
}