<?php

namespace app\models;

use app\core\Model;
use app\classes\Disciplina;
use app\classes\Endereco;
use app\classes\DocumentosFuncionario;
use app\classes\DadosFuncionais;

error_reporting(E_ERROR);

class DisciplinaModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function inserir()
    {

        $status = array();

        $disciplina = new Disciplina();
        $disciplina = $_SESSION['disciplina'];


        $codigoDisciplina = $_SESSION['disciplina']->codigodisciplina;

    }
}