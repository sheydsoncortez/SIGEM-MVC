<?php

namespace app\controllers;

use app\core\Controller;

class IndexController extends Controller{


    public function index(){
        
        $this->load("admin");

    }
}