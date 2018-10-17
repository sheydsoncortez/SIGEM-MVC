<?php 
namespace app\classes;


class Funcionario{
    private $nome;
    private $dataNasc;
    private $cidadeNasc;
    private $estadoNasc;
    private $nomePai;
    private $nomeMae;
    private $sexo;
    private $estadoCivil;
    private $telefone;
    private $email;
    private $endereco;
    private $documentos;
    private $dadosFuncionais;

    public function __construct(){

    }   

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDataNasc(){
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }

    public function getCidadeNasc(){
        return $this->cidadeNasc;
    }

    public function setCidadeNasc($cidadeNasc){
        $this->cidadeNasc = $cidadeNasc;
    }

    public function getEstadoNasc(){
        return $this->estadoNasc;
    }

    public function setEstadoNasc($estadoNasc){
        $this->estadoNasc = $estadoNasc;
    }

    public function getNomePai(){
        return $this->nomePai;
    }

    public function setNomePai($nomePai){
        $this->nomePai = $nomePai;
    }

    public function getNomeMae(){
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae){
        $this->nomeMae = $nomeMae;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
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

    public function getDadosFuncionais(){
        return $this->dadosFuncionais;
    }

    public function setDadosFuncionais(DadosFuncionais $dadosFuncionais){
        $this->dadosFuncionais = $dadosFuncionais;
    }
    
    
    public function __toString(){
        return  "======== DADOS PESSOAIS ========\n".
                "Nome: ".$this->nome."\n".
                "Data de Nascimento: ".$this->dataNasc."\n".
                "Cidade de Nascimento: ".$this->cidadeNasc."\n".
                "Estado de Nascimento: ".$this->estadoNasc."\n".
                "Nome do Pai: ".$this->nomePai."\n".
                "Nome da Mãe: ".$this->nomeMae."\n".
                "Sexo: ".$this->sexo."\n".
                "Estado Civil: ".$this->estadoCivil."\n".
                "Tel.: ".$this->telefone."\n".
                "Email: ".$this->email."\n";
    }
}