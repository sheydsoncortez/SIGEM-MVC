<?php

class Core {

    private $controller;
    private $metodo;
    private $parametros = array();

    public function __construct(){

        $this->verificaUri();

    }

    public function run(){

        session_start();

        $controllerCorrente = $this->getController();

        $c = new $controllerCorrente();

        call_user_func_array(array($c, $this->getMetodo()), $this->getParametros());
        //$c = ""


    }

    public function verificaUri(){

        $url = explode("index.php", $_SERVER["PHP_SELF"]);

        //Pega o final da URL
        $url = end($url);

        if($url != ""){

            //Explode a URL separando o elementos depois fa barra
            $url = explode('/', $url);

            //Remove o primeiro item do array que é igual a VAZIO
            array_shift($url);

            //Pega o Controller
            $this->controller = ucfirst($url[0]) . "Controller";
            array_shift($url);

            //Pega o Método
            if(isset($url[0])){
                $this->metodo = $url[0];
                array_shift($url);
            }
            

            //Pega os Paramêtros
            if(isset($url[0])){
                $this->parametros = array_filter($url);
            }

        }else{

            $this->controller = ucfirst(CONTROLLE_PADRAO) . "Controller";

        }
    }

    /**
     * Get the value of controller
     */ 
    public function getController()
    {
        if(class_exists(NAMESPACE_CONTROLLE.$this->controller)){
            return NAMESPACE_CONTROLLE.$this->controller;
        }

        return NAMESPACE_CONTROLLE.ucfirst(CONTROLLE_PADRAO) . "Controller";
        
    }

    /**
     * Get the value of metodo
     */ 
    public function getMetodo()
    {
        if(method_exists(NAMESPACE_CONTROLLE.$this->controller, $this->metodo)){
            return $this->metodo;
        }

        return METODO_PADRAO;
    }

    /**
     * Get the value of parametros
     */ 
    public function getParametros()
    {
        return $this->parametros;
    }

    /**
     * Verifica se o sistema precisa de autenticação para ser acessado
     * @return mixed
     */


}