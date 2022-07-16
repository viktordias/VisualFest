<?php

    class produtos{
        private $CodProdutos;
        private $NomeProduto;
        private $Status;
        private $Custo;
        private $Markup;
        private $Aluguel;
        private $Quantidade;
        private $Imagem;
        private $CodBarras;
    }

    public function __construct($CodProdutos, $NomeProduto,
        $Status , $Custo , $Markup , $Aluguel , $Quantidade , $Imagem , $CodBarras){
        $this->CodProdutos = $CodProdutos;
        $this->NomeProduto = $NomeProduto;
        $this->Status = $Status;
        $this->Custo = $Custo;
        $this->Markup = $Markup;
        $this->Aluguel = $Aluguel;
        $this->Quantidade = $Quantidade;
        $this->Imagem = $Imagem;
        $this->CodBarras = $CodBarras;
    }


    public function getCodProdutos(){
        return $this->CodProdutos;
    }
    public function setCodProdutos($CodProdutos){
        $this->CodProdutos = $CodProdutos   ;
    }
    public function getNomeProduto(){
        return $this->NomeProduto;
    }
    public function setNomeProduto($NomeProduto){
        $this->NomeProduto = $NomeProduto   ;
    }
    public function getStatus(){
        return $this->Status;
    }
    public function setStatus($Status){
        $this->Status = $Status   ;
    }
    public function getCusto(){
        return $this->Custo;
    }
    public function setCusto($Custo){
        $this->Custo = $Custo   ;
    }
    public function getMarkup(){
        return $this->Markup;
    }
    public function setMarkup($Markup){
        $this->Markup = $Markup   ;
    }
    public function getAluguel(){
        return $this->Aluguel;
    }
    public function setAluguel($Aluguel){
        $this->Aluguel = $Aluguel   ;
    }
    public function getQuantidade(){
        return $this->Quantidade;
    }
    public function setQuantidade($Quantidade){
        $this->Quantidade = $Quantidade   ;
    }
    public function getImagem(){
        return $this->Imagem;
    }
    public function setImagem($Imagem){
        $this->Imagem = $Imagem   ;
    }
    public function getCodBarras(){
        return $this->CodBarras;
    }
    public function setCodBarras($CodBarras){
        $this->CodBarras = $CodBarras   ;
    }



