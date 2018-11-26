<?php
/**
 * Created by PhpStorm.
 * User: Sheydson Cortez
 * Date: 29/10/2018
 * Time: 09:37
 */

namespace app\classes;


class Disciplina{

    private $codigo;
    private $nome;
    private $professor;



    public function __construct(){
        $this->view = new \stdClass;
    }

    public function __get($atrib)
    {
        // TODO: Implement __get() method.

        return $this->$atrib;
    }

    public function __set($atrib, $value)
    {
        // TODO: Implement __set() method.
        $this->$atrib = $value;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     * @param mixed $professor
     */
    public function setProfessor($professor)
    {
        $this->professor = $professor;
    }
}