<?php

namespace app\models;

use app\core\Model;
use app\classes\Turma;

error_reporting(E_ERROR);

class TurmaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir()
    {
        $status = array();
        $turma = new Turma();
        $turma = $_SESSION['turma'];

        $nome = $_SESSION['turma']->nome;
        $disciplina = $_SESSION['turma']->disciplina;
        $aluno = $_SESSION['turma']->aluno;






    }

}