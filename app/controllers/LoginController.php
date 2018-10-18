<?php

namespace app\controllers;

use app\core\Controller;
use app\models\LoginModel;

class LoginController extends Controller{

    public function __contruct(){

    }

    public function index(){

        $this->logar();

    }

    public function logar(){
        
        $user = new LoginModel();

        $dados = array();



        if($_POST) {

            $dados = $user->login($_POST["loginUsername"], $_POST["loginPassword"]);

            unset($_POST["loginUsername"]);
            unset($_POST["loginPassword"]);

            if($dados["sucess"]){
                header('location:'.URL_BASE);

            }else{
                //echo $dados["msn"];
                $this->load("login", $dados);
            }
        }
    }

    public function logout(){

        unset($_SESSION[NOME_SESSION_LOGIN]);

        session_unset();
        session_destroy();

        $dados = array();
        
        header('location:'.URL_BASE);

    }

}