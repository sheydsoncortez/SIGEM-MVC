<?php
/**
 * Created by PhpStorm.
 * User: Emanuel
 * Date: 17/10/2018
 * Time: 10:34
 */

namespace app\core;


class Auth{

    public function __construct()
    {



    }

    public function autentication(){

        if(ATENTICATION_REQUIRE){

            if(isset($_SESSION[NOME_SESSION_LOGIN])){

                return true;

            }

        }else{

            return true;

        }

        return false;
    }

}