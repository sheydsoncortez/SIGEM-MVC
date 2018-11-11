<?php

namespace app\core;

abstract class Model{

    protected $db;

    public function __construct(){
        try{

            $this->db = new \PDO(DRIVER_CONEXAO.":dbname=".DATA_BASE.";host=".SERVER, USER, PASS);

        }catch(\PDOException $e){

            throw new \PDOException($e);

        } 
    }

}