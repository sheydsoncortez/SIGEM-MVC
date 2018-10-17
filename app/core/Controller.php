<?php

namespace app\core;

use app\core\Auth;

class Controller extends Auth{


    private function includeView($viewName, $viewData = array())
    {

        extract($viewData);
        include("app/views/" . $viewName . ".php");

    }

    public function load($viewName, $viewData = array()){


        if(!parent::autentication()){
            extract($viewData);
            include("app/views/" . LOGIN_PAGE . ".php");

        }else{

            $this->includeView($viewName, $viewData);

        }

    }
}

