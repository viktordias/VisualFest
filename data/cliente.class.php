<?php
    class Cliente{
        private $CodCliente;
        private $Nome;
        private $DataNascimento;
        private $Logradouro;
        private $Bairro;
        private $Numero;
        private $CEP;
        private $CPF_CNPJ;
        private $Cidade;
        private $Estado;
        private $Observacoes;
        private $Telefone;
        private $Complemento;

        public function __construct($CodCliente, $Nome,
        $DataNascimento, $Logradouro , $Bairro , $Numero , $CEP , $CPF_CNPJ , $Cidade , $Estado , $Observacoes,
        $Telefone , $Complemento){
        $this->CodCliente = $CodCliente;
        $this->Nome = $Nome;
        $this->DataNascimento = $DataNascimento;
        $this->Logradouro = $Logradouro;
        $this->Bairro = $Bairro;
        $this->Numero = $Numero;
        $this->CEP = $CEP;
        $this->CPF_CNPJ = $CPF_CNPJ;
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
        $this->Observacoes = $Observacoes;
        $this->Telefone = $Telefone;
        $this->Complemento = $Complemento;

}


    public function getCodCliente(){
        return $this->CodCliente;
    }
    public function setCodCliente($CodCliente){
        $this->CodCliente = $CodCliente;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getDataNascimento(){
        return $this->DataNascimento;
    }
    public function setDataNascimento($DataNascimento){
        $this->DataNascimento = $DataNascimento;
    }
    public function getLogradouro(){
        return $this->Logradouro;
    }
    public function setLogradouro($Logradouro){
        $this->Logradouro = $Logradouro;
    }
    public function getBairro(){
        return $this->Bairro;
    }
    public function setBairro($Bairro){
        $this->Bairro = $Bairro;
    }
    public function getNumero(){
        return $this->Numero;
    }
    public function setNumero($Numero){
        $this->Numero = $Numero;
    }
    public function getCEP(){
        return $this->CEP;
    }
    public function setCEP($CEP){
        $this->CEP = $CEP;
    }
    public function getCPF_CNPJ(){
        return $this->CPF_CNPJ;
    }
    public function setCPF_CNPJ($CPF_CNPJ){
        $this->CPF_CNPJ = $CPF_CNPJ;
    }
    public function getCidade(){
        return $this->Cidade;
    }
    public function setCidade($Cidade){
        $this->Cidade = $Cidade;
    }
    public function getEstado(){
        return $this->Estado;
    }
    public function setEstado($Estado){
        $this->Estado = $Estado;
    }
    public function getObservacoes(){
        return $this->Observacoes;
    }
    public function setObservacoes($Observacoes){
        $this->Observacoes = $Observacoes;
    }
    public function getTelefone(){
        return $this->Telefone;
    }
    public function setTelefone($Telefone){
        $this->Telefone = $Telefone;
    }
    public function getComplemento(){
        return $this->Complemento;
    }
    public function setComplemento($Complemento){
        $this->Complemento = $Complemento;
    }
   
    }


  