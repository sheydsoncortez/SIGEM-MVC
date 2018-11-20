<?php

        namespace app\models;
        //use app\classes\Endereco;
        use app\core\Model;
        use app\classes\Escola;

        error_reporting(E_ERROR);

        class EscolaModel extends Model
        {
            public function __construct()
            {
                parent::__construct();
            }


            public function inserir()
            {

                $status = array();


                $escola = new Escola();
                $escola = $_SESSION['escola'];

                $codigoEscola = $_SESSION['escola']->codigo;
                $nomeEscola = $_SESSION['escola']->nome;
                $telefoneEscola = $_SESSION['escola']->telefone;
                $emailEscola = $_SESSION['escola']->email;

                $enderecoCod = $codigoEscola;
                $enderecoCep = $_SESSION['escola']->endereco->cep;
                $enderecoCidade = $_SESSION['escola']->endereco->cidade;
                $enderecoLogradouro = $_SESSION['escola']->endereco->logradouro;
                $enderecoNum = $_SESSION['escola']->endereco->numero;
                $enderecoBairro = $_SESSION['escola']->endereco->bairro;
                $enderecoUf = $_SESSION['escola']->endereco->estado;

                $ativo = '1';


                $insert_endereco = "INSERT INTO public.endereco
                                    (codigo, cep, cidade, logradouro, numero, bairro, estado) 
                                    VALUES 
                                    ('{$enderecoCod}','{$enderecoCep}' , '{$enderecoCidade}', '{$enderecoLogradouro}', 
                                    '{$enderecoNum}', '{$enderecoBairro}', '{$enderecoUf}');";


                $insert_escola = "INSERT INTO public.escola(
                                        codigo, nome, telefone, email, endereco, ativo)
                                       VALUES 
                                        (" . intval($codigoEscola) . ", '{$nomeEscola}', '{$telefoneEscola}', '{$emailEscola}', '{$enderecoCod}', '{$ativo}');";


                try {
                    // set the PDO error mode to exception
                    $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                    $query = $this->db->prepare($insert_endereco);
                    $query->execute();

                    $query = $this->db->prepare($insert_escola);
                    $query->execute();


                    $status["status"] = true;

                    $status["msn"] = "Escola inserida com Sucesso.";
                    $status["codigo"] = $codigoEscola;

                    unset($_SESSION['escola']);

                    return $status;

                } catch (\PDOException $e) {

                    $status["status"] = false;
                    $status["msn"] = "Erro ao inserir a Escola" . $e->getMessage();

                    return $status;
                }


            }

            public function update(){
                $e = $_SESSION["escola"];
                $es_id = $_SESSION["es_id"];

                try{
                    $this->db->setAttribute(\PDO::ATTR_ERRMODE);

                    $upen_sql = 'UPDATE public.endereco SET cep=:cep, cidade=:cidade, logradouro=:logradouro, numero=:numero, bairro=:bairro, estado=:estado WHERE codigo=:endereco_id';

                    $query = $this->db->prepare($upen_sql);
                    $query->bindValue(':cep', $e->endereco->cep);
                    $query->bindValue(':cidade', $e->endereco->cidade);
                    $query->bindValue('logradouro', $e->endereco->logradouro);
                    $query->bindValue(':numero', $e->endereco->numero);
                    $query->bindValue(':bairro', $e->endereco->bairro);
                    $query->bindValue(':estado', $e->endereco->estado);
                    $query->bindValue('endereco_id', $es_id->endereco);
                    $query->execute();
                    $query->errorInfo();

                    $sql_up_esc = "UPDATE public.escola SET codigo=:codigo, nome=:nome, telefone=:telefone, email=:email WHERE codigo=:escola_id";
                    $query = $this->db->prepare($sql_up_esc);
                    $query->bindValue(':codigo', $e->codigo);
                    $query->bindValue(':nome', $e->nome);
                    $query->bindValue(':telefone', $e->telefone);
                    $query->bindValue(':email', $e->email);
                    $query->bindValue(':escola_id', $es_id->codigo);
                    $query->execute();
                    $query->errorInfo();

                    $status["status"]=true;
                    $status["msm"]="Os dados da escola foram atualizados com sucesso!";
                    unset($_SESSION['escola']);
                    unset($_SESSION['es_id']);

                    return $status;

                }catch (\PDOException $m){

                    $status["status"]=false;
                    $status["msm"]="Erro ao atualizados os dados da escola!".$m->getMessage();

                    return $status;

                }

            }

            public function revover($codigoEscola){
                $status = array();

                try{
                    $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                    $upescola_sql = 'UPDATE public.escola SET ativo=false WHERE codigo=:codigo';

                    $query = $this->db->prepare($upescola_sql);
                    $query->bindValue(':codigo', $codigoEscola);
                    $query->execute();
                    $query->errorInfo();

                    $status["status"] = true;
                    $status["msn"] = "Escola Removida!";

                    return $status;

                }catch (\PDOException $e){

                    $status["status"] = false;
                    $status["msn"] = "Erro ao remover a Escola" . $e->getMessage();

                    return $status;
                }


            }



                /** Metodo para recuperar as escolas do banco **/
            public function getEscola($codigo)
            {
                $c = intval ($codigo);
                $sql_escola = "SELECT * FROM public.escola WHERE codigo={$c} AND ativo=true";

                $query = $this->db->query($sql_escola);

                if ($query->rowCount() == 1) {



                    $d = $query->fetch(\PDO::FETCH_OBJ);

                    $sql_end = "SELECT cep, cidade, logradouro, numero, bairro, estado FROM public.endereco WHERE codigo='{$d->endereco}'";
                    $query = $this->db->query($sql_end);
                    $d -> endereco = $query->fetch(\PDO::FETCH_OBJ);

                    unset($_SESSION['escola']);


                }else{

                    $d = false;

                }

                //echo"<pre>";
                //print_r($f);

                return $d;
            }

                /** Medoto para listar as escolas**/
            public function listarTodos(){

              /**  $sql_escola = "SELECT * FROM public.escola WHERE ativo=:ativo";

                switch ($ativo){
                    case 'ativos':
                        $status = '1';
                        break;
                    case 'inativos':
                        $status = '0';
                        break;
                    case 'todos':
                        $sql_escola = "SELECT * FROM public.escola WHERE ativo IS NOT NULL";
                        $status = 'IS NOT NULL';
                        break;
                }

                $query = $this->db->prepare($sql_escola);
                $query->bindValue(':ativo', $status);
                $query->execute(); **/


                $sql_escola = "SELECT * FROM public.escola WHERE ativo=TRUE";
                $query = $this->db->query($sql_escola);

                return  $query->fetchAll(\PDO::FETCH_OBJ);
            }





        }