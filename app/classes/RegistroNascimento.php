<?php

namespace app\classes;

class RegistroNascimento{

    private $numeroRegistro;
    private $livro;
    private $folha;
    private $data;
    private $cartorio;
    private $cidade;
    private $uf;

    public function __construct(){

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

    public function getNumeroRegistro(){
        return $this->$numeroRegistro;
    }

    public function setNumeroRegistro($numeroRegistro){
        $this->numeroRegistro = $numeroRegistro;
    }

    public function getLivro(){
        return $this->$livro;
    }

    public function setLivro($livro){
        $this->livro = $livro;
    }

    public function getFolha(){
        return $this->$folha;
    }

    public function setFolha($folha){
        $this->folha = $folha;
    }

    public function getData(){
        return $this->$data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getCartorio(){
        return $this->$cartorio;
    }

    public function setCartorio($cartorio){
        $this->cartorio = $cartorio;
    }

    public function getCidade(){
        return $this->$cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getUf(){
        return $this->$uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }
}