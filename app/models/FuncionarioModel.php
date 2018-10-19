<?php

namespace app\models;

use app\core\Model;
use app\classes\Funcionario;
use app\classes\Endereco;
use app\classes\DocumentosFuncionario;
use app\classes\DadosFuncionais;

class FuncionarioModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function inserir(){
        
        $cpf = $_SESSION['funcionario']->getDocumentos()->getCpf();
        $pispasep = $_SESSION['funcionario']->getDocumentos()->getPisPasep();
        $nome = $_SESSION['funcionario']->getNome();
        $dataNasc = $_SESSION['funcionario']->getDataNasc();
        $cidadeNasc = $_SESSION['funcionario']->getCidadeNasc();
        $ufNasc = $_SESSION['funcionario']->getEstadoNasc();
        $nomePai = $_SESSION['funcionario']->getNomePai();
        $nomeMae = $_SESSION['funcionario']->getNomeMae();
        $sexo = $_SESSION['funcionario']->getSexo();
        $estadoCivil = $_SESSION['funcionario']->getEstadoCivil();
        $telefone = $_SESSION['funcionario']->getTelefone();
        $email = $_SESSION['funcionario']->getEmail();

        $enderecoCod = $cpf;
        $enderecoCep = $_SESSION['funcionario']->getEndereco()->getCep();
        $enderecoCidade = $_SESSION['funcionario']->getEndereco()->getCidade();
        $enderecoLogradouro = $_SESSION['funcionario']->getEndereco()->getLogradouro();
        $enderecoNum = $_SESSION['funcionario']->getEndereco()->getNumero();
        $enderecoBairro = $_SESSION['funcionario']->getEndereco()->getBairro();
        $enderecoUf = $_SESSION['funcionario']->getEndereco()->getUfEndereco();

        $ctpsNum = $_SESSION['funcionario']->getDocumentos()->getCtps()->getNumeroCtps();
        $ctpsSerie = $_SESSION['funcionario']->getDocumentos()->getCtps()->getSerieCtps();
        $rgNum = $_SESSION['funcionario']->getDocumentos()->getRg()->getNumeroRg();
        $rgOrgao = $_SESSION['funcionario']->getDocumentos()->getRg()->getOrgaoExpRg();
        $rgDataExp = $_SESSION['funcionario']->getDocumentos()->getRg()->getDataExpRg();
        $rgUfExp = $_SESSION['funcionario']->getDocumentos()->getRg()->getUfExpRg();
        $titNum = $_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->getNumeroTit();
        $titSecao = $_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->getSecaoTit();
        $titZona = $_SESSION['funcionario']->getDocumentos()->getTituloEleitoral()->getZonaTit();
        $resNum = $_SESSION['funcionario']->getDocumentos()->getReservista()->getNumeroRes();
        $resCat = $_SESSION['funcionario']->getDocumentos()->getReservista()->getCategoriaRes();
        $resSerie = $_SESSION['funcionario']->getDocumentos()->getReservista()->getSerieRes();

        
        $formAcad = $_SESSION['funcionario']->getDadosFuncionais()->getFormacaoAcademicaFun();        
        $matricula = $_SESSION['funcionario']->getDadosFuncionais()->getMatriculaFun();
        $dataAdmis = $_SESSION['funcionario']->getDadosFuncionais()->getDataAdmissaoFun();
        $escolaridade = $_SESSION['funcionario']->getDadosFuncionais()->getEscolaridadeFun();        
        $anoConclusao = $_SESSION['funcionario']->getDadosFuncionais()->getAnoConclusaoFun();
        $cargo = $_SESSION['funcionario']->getDadosFuncionais()->getCargoFun();
        $funcao = $_SESSION['funcionario']->getDadosFuncionais()->getFuncaoFun();

        $insert_endereco = "INSERT INTO public.endereco
                            (codigo_end, cep_end, cidade_end, logradouro_end, numero_end, bairro_end, estado_end) 
                            VALUES 
                            ('{$enderecoCod}','{$enderecoCep}' , '{$enderecoCidade}', '{$enderecoLogradouro}', 
                            '{$enderecoNum}', '{$enderecoBairro}', '{$enderecoUf}');";

        $insert_carteiraprof = "INSERT INTO public.carteira_profissional(numero_car, serie_car) 
                                VALUES ('{$ctpsNum}', '{$ctpsSerie}');";

        $insert_rg = "INSERT INTO public.rg(numero_rg, orgaoexp_rg, dataexp_rg, ufexp_rg)
                      VALUES ('{$rgNum}', '{$rgOrgao}', '$rgDataExp', '{$rgUfExp}');";
        
        $insert_tituloeleitor = "INSERT INTO public.titulo_eleitoral(numero_tit, zona_tit, secao_tit)
                                 VALUES ('{$titNum}', {$titZona}, {$titSecao});";
        
        $insert_reservista = "INSERT INTO public.reservista(numero_res, categoria_res, serie_res)
                              VALUES ('{$resNum}', '{$resCat}','{$resSerie}');";
        
        $insert_funcionario = "INSERT INTO public.funcionario(
                                cpf_fun, nome_fun, datanasc_fun, cidadenasc_fun, ufnasc_fun, nomepai_fun, 
                                nomemae_fun, sexo_fun, estadocivil_fun, telefone_fun, email_fun, pispasep_fun, 
                                matricula_fun, dataadmissao_fun, escolaridade_fun, formacaoacademica_fun, 
                                anoconclusao_fun, cargo_fun, funcao_fun, endereco_fun, carteiraprof_fun, rg_fun, 
                                tituloeleitor_fun, reservista_fun, senha_fun)
                               VALUES 
                                ('{$cpf}', '{$nome}', '{$dataNasc}', '{$cidadeNasc}', '{$ufNasc}', '{$nomePai}', 
                                '{$nomeMae}', '{$sexo}', '{$estadoCivil}', '{$telefone}', '{$email}', '{$pispasep}', 
                                '{$matricula}', '$dataAdmis', '{$escolaridade}', '{$formAcad}', {$anoConclusao}, 
                                '{$cargo}', '{$funcao}', '{$enderecoCod}', '{$ctpsNum}', '{$rgNum}', '{$titNum}', 
                                '{$resNum}', md5('{$cpf}'));";

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

            unset($_SESSION['funcionario']);

            return "Funcionário inserido com Sucesso.";

        }
        catch(\PDOException $e){
            return "Erro ao inserir funcionário" . $e->getMessage();
        }
        return "";
    }
    
    public function listarUm($cpf){
        
        $sql_funcionario = "SELECT * FROM public.funcionario WHERE cpf_fun='{$cpf}'";                            
        $query = $this->db->query($sql_funcionario);
        
        if($query->rowCount() == 1){
            
            $f = $query->fetch(\PDO::FETCH_OBJ);            
            
            $sql_end = "SELECT * FROM public.endereco WHERE codigo_end='{$f->endereco_fun}'";
            $query = $this->db->query($sql_end);
            $e = $query->fetch(\PDO::FETCH_OBJ);
            
            $sql_cart_pro = "SELECT * FROM public.carteira_profissional WHERE numero_car='{$f->carteiraprof_fun}'";
            $query = $this->db->query($sql_cart_pro);
            $cp = $query->fetch(\PDO::FETCH_OBJ);
            
            $sql_res = "SELECT * FROM public.reservista WHERE numero_res='{$f->reservista_fun}'";
            $query = $this->db->query($sql_res);
            $r = $query->fetch(\PDO::FETCH_OBJ);
            
            $sql_rg = "SELECT * FROM public.rg WHERE numero_rg='{$f->rg_fun}'";
            $query = $this->db->query($sql_rg);
            $rg = $query->fetch(\PDO::FETCH_OBJ);
            
            $sql_tit = "SELECT * FROM public.titulo_eleitoral WHERE numero_tit='{$f->tituloeleitor_fun}'";
            $query = $this->db->query($sql_tit);
            $tit = $query->fetch(\PDO::FETCH_OBJ);
            
            $funcionario = new Funcionario();
            $funcionario->setNome($f->nome_fun);
            $funcionario->setDataNasc($f->datanasc_fun);
            $funcionario->setcidadeNasc($f->cidadenasc_fun);
            $funcionario->setEstadoNasc($f->ufnasc_fun);
            $funcionario->setNomePai($f->nomepai_fun);
            $funcionario->setNomeMae($f->nomemae_fun);
            $funcionario->setSexo($f->sexo_fun);
            $funcionario->setEstadoCivil($f->estadocivil_fun);
            $funcionario->setTelefone($f->telefone_fun);
            $funcionario->setEmail($f->email_fun);
            
            $enderecof = new Endereco();
            $enderecof->setCep($e->cep_end);
            $enderecof->setCidade($e->cidade_end);
            $enderecof->setLogradouro($e->logradouro_end);
            $enderecof->setNumero($e->numero_end);
            $enderecof->setBairro($e->bairro_end);
            $enderecof->setUfEndereco($e->estado_end);       
            
            $documentosf = new DocumentosFuncionario();
            $documentosf->setCpf($f->cpf_fun);
            $documentosf->setPisPasep($f->pispasep_fun);
            $documentosf->getCtps()->setNumeroCtps($cp->numero_car);
            $documentosf->getCtps()->setSerieCtps($cp->serie_car);
            $documentosf->getRg()->setNumeroRg($rg->numero_rg);
            $documentosf->getRg()->setOrgaoExpRg($rg->orgaoexp_rg);
            $documentosf->getRg()->setDataExpRg($rg->dataexp_rg);
            $documentosf->getRg()->setUfExpRg($rg->ufexp_rg);
            $documentosf->getTituloEleitoral()->setNumeroTit($tit->numero_tit);
            $documentosf->getTituloEleitoral()->setSecaoTit($tit->secao_tit);
            $documentosf->getTituloEleitoral()->setZonaTit($tit->zona_tit);
            $documentosf->getReservista()->setNumeroRes($r->numero_res);
            $documentosf->getReservista()->setCategoriaRes($r->categoria_res);
            $documentosf->getReservista()->setSerieRes($r->serie_res);
                    
            $dadosFuncionaisf = new DadosFuncionais();
            $dadosFuncionaisf->setFormacaoAcademicaFun($f->formacaoacademica_fun);
            $dadosFuncionaisf->setMatriculaFun($f->matricula_fun);
            $dadosFuncionaisf->setDataAdmissaoFun($f->dataadmissao_fun);
            $dadosFuncionaisf->setEscolaridadeFun($f->escolaridade_fun);        
            $dadosFuncionaisf->setAnoConclusaoFun($f->anoconclusao_fun);
            $dadosFuncionaisf->setCargoFun($f->cargo_fun);
            $dadosFuncionaisf->setFuncaoFun($f->funcao_fun);
            
            $funcionario->setEndereco($enderecof);
            $funcionario->setDocumentos($documentosf);
            $funcionario->setDadosFuncionais($dadosFuncionaisf);
            
            return $funcionario;
        }
        
        return null;
    }
    
    public function listarTodos(){
        
        $sql_funcionario = "SELECT * FROM public.funcionario";                            
        $query = $this->db->query($sql_funcionario);
        
        return  $query->fetchAll(\PDO::FETCH_OBJ);        
    }

}