<?php

    public class locacaoProdutos{
        private $locacao_CodLocacao;
        private $Produtos_CodProduto;
        private $Quantidade;
        private $Valor;
        private $Total;
    }


    public function __construct($locacao_CodLocacao, $Produtos_CodProduto,
        $Quantidade , $Valor , $Total ){
        $this->locacao_CodLocacao = $locacao_CodLocacao;
        $this->Produtos_CodProduto = $Produtos_CodProduto;
        $this->Quantidade = $Quantidade;
        $this->Valor = $Valor;
        $this->Total = $Total;

        /**
         * Get the value of locacao_CodLocacao
         */ 
        public function getLocacao_CodLocacao()
        {
                return $this->locacao_CodLocacao;
        }

        /**
         * Set the value of locacao_CodLocacao
         *
         * @return  self
         */ 
        public function setLocacao_CodLocacao($locacao_CodLocacao)
        {
                $this->locacao_CodLocacao = $locacao_CodLocacao;

                return $this;
        }

        /**
         * Get the value of Produtos_CodProduto
         */ 
        public function getProdutos_CodProduto()
        {
                return $this->Produtos_CodProduto;
        }

        /**
         * Set the value of Produtos_CodProduto
         *
         * @return  self
         */ 
        public function setProdutos_CodProduto($Produtos_CodProduto)
        {
                $this->Produtos_CodProduto = $Produtos_CodProduto;

                return $this;
        }

        /**
         * Get the value of Quantidade
         */ 
        public function getQuantidade()
        {
                return $this->Quantidade;
        }

        /**
         * Set the value of Quantidade
         *
         * @return  self
         */ 
        public function setQuantidade($Quantidade)
        {
                $this->Quantidade = $Quantidade;

                return $this;
        }

        /**
         * Get the value of Valor
         */ 
        public function getValor()
        {
                return $this->Valor;
        }

        /**
         * Set the value of Valor
         *
         * @return  self
         */ 
        public function setValor($Valor)
        {
                $this->Valor = $Valor;

                return $this;
        }

        /**
         * Get the value of Total
         */ 
        public function getTotal()
        {
                return $this->Total;
        }

        /**
         * Set the value of Total
         *
         * @return  self
         */ 
        public function setTotal($Total)
        {
                $this->Total = $Total;

                return $this;
        }
}