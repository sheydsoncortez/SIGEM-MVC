<?php

namespace app\models;

use app\core\Model;
use app\classes\Disciplina;


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


        $d = $_SESSION['disciplina'];



        $discplinaSQL = "INSERT INTO public.disciplina(
                            nome, professor, turma, serie)
	                      VALUES (?, ?, ?, ?);";

        try {
            // set the PDO error mode to exception
                $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                    $query = $this->db->prepare($discplinaSQL);

                    $query->bindValue(1, $d->nome, \PDO::PARAM_STR);
                    $query->bindValue(2, intval($d->professor), \PDO::PARAM_INT);
                    $query->bindValue(3, intval($d->turma), \PDO::PARAM_INT);
                    $query->bindValue(4, $d->serie, \PDO::PARAM_STR);
                    //$query->bindValue(5,'1', \PDO::PARAM_BOOL);

                    $query->execute();

                    $status["status"] = true;

                    $status["msn"] = "Disciplina inserida com Sucesso.";

                    $status["codigo"] = $this->db->lastInsertId();

                    unset($_SESSION['disciplina']);

                    return $status ;

            }catch(\PDOException $e){

                $status["status"] = false;
                $status["msn"] = "Erro ao inserir disciplina" . $e->getMessage();

            return $status;
        }




    }


    public function getDisciplina($codigo)
    {
        $c = intval ($codigo);
        $sql_disciplina = "SELECT * FROM public.disciplina WHERE codigo={$c} AND ativo=true";

        $query = $this->db->query($sql_disciplina);

        if ($query->rowCount() == 1) {

            unset($_SESSION['disciplina']);

            $d = $query->fetch(\PDO::FETCH_OBJ);


        }else{

            $d = false;

        }

        //echo"<pre>";
        //print_r($f);

        return $d;
    }

    public function listarTodos(){

        $sql_disciplina = "SELECT * FROM public.disciplina WHERE ativo=TRUE";
        $query = $this->db->query($sql_disciplina);

        return  $query->fetchAll(\PDO::FETCH_OBJ);
    }
}