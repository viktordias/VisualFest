<?php

    public class reservaProdutos{
        private $reserva_CodReserva;
        private $Produtos_CodProdutos;
        private $Quantidade;
    }

    
    public function __construct($reserva_CodReserva, $Produtos_CodProdutos , $Quantidade){
        $this->reserva_CodReserva = $reserva_CodReserva;
        $this->Produtos_CodProdutos = $Produtos_CodProdutos;
        $this->Quantidade = $Quantidade;


        /**
         * Get the value of reserva_CodReserva
         */ 
        public function getReserva_CodReserva()
        {
                return $this->reserva_CodReserva;
        }

        /**
         * Set the value of reserva_CodReserva
         *
         * @return  self
         */ 
        public function setReserva_CodReserva($reserva_CodReserva)
        {
                $this->reserva_CodReserva = $reserva_CodReserva;

                return $this;
        }

        /**
         * Get the value of Produtos_CodProdutos
         */ 
        public function getProdutos_CodProdutos()
        {
                return $this->Produtos_CodProdutos;
        }

        /**
         * Set the value of Produtos_CodProdutos
         *
         * @return  self
         */ 
        public function setProdutos_CodProdutos($Produtos_CodProdutos)
        {
                $this->Produtos_CodProdutos = $Produtos_CodProdutos;

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


    }
