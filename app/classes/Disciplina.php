<?php
/**
 * Created by PhpStorm.
 * User: Sheydson Cortez
 * Date: 29/10/2018
 * Time: 09:37
 */

namespace app\classes;


class Disciplina{

    private $codigoDisciplina;
    private $nomeDisciplina;
    private $codigoProfessor;
    private $codigoTurma;
    private $codigoSerie;

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
    public function getCodigoDisciplina()
    {
        return $this->codigoDisciplina;
    }

    /**
     * @param mixed $codigoDisciplina
     */
    public function setCodigoDisciplina($codigoDisciplina)
    {
        $this->codigoDisciplina = $codigoDisciplina;
    }

    /**
     * @return mixed
     */
    public function getNomeDisciplina()
    {
        return $this->nomeDisciplina;
    }

    /**
     * @param mixed $nomeDisciplina
     */
    public function setNomeDisciplina($nomeDisciplina)
    {
        $this->nomeDisciplina = $nomeDisciplina;
    }

    /**
     * @return mixed
     */
    public function getCodigoProfessor()
    {
        return $this->codigoProfessor;
    }

    /**
     * @param mixed $codigoProfessor
     */
    public function setCodigoProfessor($codigoProfessor)
    {
        $this->codigoProfessor = $codigoProfessor;
    }

    /**
     * @return mixed
     */
    public function getCodigoTurma()
    {
        return $this->codigoTurma;
    }

    /**
     * @param mixed $codigoTurma
     */
    public function setCodigoTurma($codigoTurma)
    {
        $this->codigoTurma = $codigoTurma;
    }

    /**
     * @return mixed
     */
    public function getCodigoSerie()
    {
        return $this->codigoSerie;
    }

    /**
     * @param mixed $codigoSerie
     */
    public function setCodigoSerie($codigoSerie)
    {
        $this->codigoSerie = $codigoSerie;
    }

}