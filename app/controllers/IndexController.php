<?php

namespace app\controllers;

use app\core\Controller;

class IndexController extends Controller{


    public function index(){

        unset($_SESSION['funcionario']);

        $dados["view"] = "template/inicio";
        $this->load("admin", $dados);

    }
}