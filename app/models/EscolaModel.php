<?php
/**
 * Created by PhpStorm.
 * User: mikmi
 * Date: 29/10/2018
 * Time: 21:19
 */

namespace app\models;
use app\classes\Endereco;
use app\core\Model;

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

        $codigoEscola = $_SESSION['escola']->codigoescola;
        $nomeEscola = $_SESSION['escola']->nomeescola;
        $telefoneEscola = $_SESSION['escola']->telefoneescola;
        $emailEscola = $_SESSION['escola']->emailescola;

        $enderecoCod = $codigoescola;
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
                                codigo, nome, telefone, email)
                               VALUES 
                                ('{$codigoEscola}', '{$nomeEscola}', '{$telefoneEscola}', '{$emailEscola}')";

















    }
}