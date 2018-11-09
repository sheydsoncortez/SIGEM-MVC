<?php
/**
 * Created by PhpStorm.
 * User: mikmimichel
 * Date: 29/10/2018
 * Time: 21:19
 */

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

        //$e = $_SESSION['escola'];



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


        $insert_endereco = "INSERT INTO public.endereco
                            (codigo, cep, cidade, logradouro, numero, bairro, estado) 
                            VALUES 
                            ('{$enderecoCod}','{$enderecoCep}' , '{$enderecoCidade}', '{$enderecoLogradouro}', 
                            '{$enderecoNum}', '{$enderecoBairro}', '{$enderecoUf}');";


        $insert_escola = "INSERT INTO public.escola(
                                codigo, nome, telefone, email, endereco)
                               VALUES 
                                (".intval($codigoEscola).", '{$nomeEscola}', '{$telefoneEscola}', '{$emailEscola}', '{$enderecoCod}');";


        try {
            // set the PDO error mode to exception
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $this->db->prepare($insert_endereco);
            $query->execute();

            $query = $this->db->prepare($insert_escola);
            $query->execute();



            $status["status"] = true;

            $status["msn"] = "Escola inserida com Sucesso.";
            $status["codigo"] = $codigoEscola ;

            unset($_SESSION['escola']);

            return $status ;

        }
        catch(\PDOException $e){

            $status["status"] = false;
            $status["msn"] = "Erro ao inserir a escola" . $e->getMessage();

            return $status;
        }















    }
}