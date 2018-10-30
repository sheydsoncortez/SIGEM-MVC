<?php
/**
 * Created by PhpStorm.
 * User: mikmichel
 * Date: 29/10/2018
 * Time: 20:48
 */

namespace app\classes;


class Escola
{
    private $codigoEscola;

    /**
     * @return mixed
     */
    public function getCodigoEscola()
    {
        return $this->codigoEscola;
    }

    /**
     * @param mixed $codigoEscola
     */
    public function setCodigoEscola($codigoEscola)
    {
        $this->codigoEscola = $codigoEscola;
    }

    /**
     * @return mixed
     */
    public function getNomeEscola()
    {
        return $this->nomeEscola;
    }

    /**
     * @param mixed $nomeEscola
     */
    public function setNomeEscola($nomeEscola)
    {
        $this->nomeEscola = $nomeEscola;
    }

    /**
     * @return mixed
     */
    public function getTelefoneEscola()
    {
        return $this->telefoneEscola;
    }

    /**
     * @param mixed $telefoneEscola
     */
    public function setTelefoneEscola($telefoneEscola)
    {
        $this->telefoneEscola = $telefoneEscola;
    }

    /**
     * @return mixed
     */
    public function getEmailEscola()
    {
        return $this->emailEscola;
    }

    /**
     * @param mixed $emailEscola
     */
    public function setEmailEscola($emailEscola)
    {
        $this->emailEscola = $emailEscola;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    private $nomeEscola;
    private $telefoneEscola;
    private $emailEscola;
    private $endereco;


}