<?php 
namespace app\classes;

use app\classes\Endereco;
use app\classes\DocumentosFuncionario;
use app\classes\DadosFuncionais;

class Funcionario{
    private $nome;
    private $datanasc;
    private $cidadenasc;
    private $estadonasc;
    private $nomepai;
    private $nomemae;
    private $sexo;
    private $estadocivil;
    private $telefone;
    private $email;
    private $endereco;
    private $documentos;
    private $dadosfuncionais;
    private $foto;


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

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDatanasc(){
        return $this->datanasc;
    }

    public function setDatanasc($datanasc){
        $this->datanasc = $datanasc;
    }

    public function getCidadenasc(){
        return $this->cidadenasc;
    }

    public function setCidadenasc($cidadenasc){
        $this->cidadeNasc = $cidadeNasc;
    }

    public function getEstadonasc(){
        return $this->estadonasc;
    }

    public function setEstadonasc($estadonasc){
        $this->estadonasc = $estadonasc;
    }

    public function getNomepai(){
        return $this->nomepai;
    }

    public function setNomepai($nomepai){
        $this->nomepai = $nomepai;
    }

    public function getNomemae(){
        return $this->nomemae;
    }

    public function setNomemae($nomemae){
        $this->nomemae = $nomemae;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getEstadocivil(){
        return $this->estadocivil;
    }

    public function setEstadocivil($estadocivil){
        $this->estadocivil = $estadocivil;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }   

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco){
        $this->endereco = $endereco;
    }

    public function getDocumentos(){
        return $this->documentos;
    }

    public function setDocumentos(DocumentosFuncionario $documentos){
        $this->documentos = $documentos;
    }

    public function getDadosfuncionais(){
        return $this->dadosfuncionais;
    }

    public function setDadosfuncionais(DadosFuncionais $dadosfuncionais){
        $this->dadosfuncionais = $dadosfuncionais;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function __toString(){
        return  "======== DADOS PESSOAIS ========\n".
                "Foto: ".$this->foto."\n".
                "Nome: ".$this->nome."\n".
                "Data de Nascimento: ".$this->datanasc."\n".
                "Cidade de Nascimento: ".$this->cidadenasc."\n".
                "Estado de Nascimento: ".$this->estadonasc."\n".
                "Nome do Pai: ".$this->nomepai."\n".
                "Nome da Mãe: ".$this->nomemae."\n".
                "Sexo: ".$this->sexo."\n".
                "Estado Civil: ".$this->estadocivil."\n".
                "Tel.: ".$this->telefone."\n".
                "Email: ".$this->email."\n";
    }
}