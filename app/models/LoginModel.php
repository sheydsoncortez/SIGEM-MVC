<?php

namespace app\models;

use app\core\Model;

class LoginModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function login($user, $pass){

        $msn = array();

        $sql_user = "SELECT matricula_fun, senha_fun, nome_fun, funcao_fun  
                     FROM funcionario WHERE matricula_fun=:user;";

        $sql_pass = "SELECT matricula_fun, senha_fun, nome_fun, funcao_fun  
                     FROM funcionario WHERE matricula_fun=:user AND senha_fun=md5(:pass);";

        $query = $this->db->prepare($sql_user);

        $query->bindParam(":user", $user);
        $query->execute();

        if($query->rowCount() < 1) {

            $msn["msn"] = "Login não existe";
            $msn["sucess"] = false;

        }else{

            $query = $this->db->prepare($sql_pass);
            $query->bindParam(":user", $user);
            $query->bindParam(":pass", $pass);
            $query->execute();

            $user = $query->fetch(\PDO::FETCH_ASSOC);

            if($query->rowCount() == 1){

                $_SESSION[NOME_SESSION_LOGIN] = array(
                    "login" => $user['matricula_fun'],
                    "pass" => $user['senha_fun'],
                    "name" => $user['nome_fun'],
                    "function" => $user['funcao_fun']
                );

                $msn["sucess"] = true;

            }else{

                $msn["msn"] = "Senha não corresponde";
                $msn["sucess"] = false;

            }
        }

        $this->db = null;

        return $msn;
    }
}