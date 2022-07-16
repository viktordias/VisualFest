<?php

    Public class locacao{
        private $CodLocacao;
        private $DataInicio;
        private $DataDevolucao;
        private $DataFinal;
        private $ValorDia;
        private $ValorFinal;
        private $Desconto;
        private $MultaDia;
        private $MultaTotal;
        private $Cliente_CodCliente;
        private $HoraInicial;
        private $HoraTermino;
    }

    public function __construct($CodLocacao, $DataInicio,
        $DataDevolucao, $DataFinal , $ValorDia , $ValorFinal , $Desconto , $MultaDia ,
         $MultaTotal , $Cliente_CodCliente , $HoraInicial,
        $HoraTermino ){
        $this->CodLocacao = $CodLocacao;
        $this->DataInicio = $DataInicio;
        $this->DataDevolucao = $DataDevolucao;
        $this->DataFinal = $DataFinal;
        $this->ValorDia = $ValorDia;
        $this->ValorFinal = $ValorFinal;
        $this->Desconto = $Desconto;
        $this->MultaDia = $MultaDia;
        $this->MultaTotal = $MultaTotal;
        $this->Cliente_CodCliente = $Cliente_CodCliente;
        $this->HoraInicial = $HoraInicial;
        $this->HoraTermino = $HoraTermino;


        /**
         * Get the value of CodLocacao
         */ 
        public function getCodLocacao()
        {
                return $this->CodLocacao;
        }

        /**
         * Set the value of CodLocacao
         *
         * @return  self
         */ 
        public function setCodLocacao($CodLocacao)
        {
                $this->CodLocacao = $CodLocacao;

                return $this;
        }

        /**
         * Get the value of DataInicio
         */ 
        public function getDataInicio()
        {
                return $this->DataInicio;
        }

        /**
         * Set the value of DataInicio
         *
         * @return  self
         */ 
        public function setDataInicio($DataInicio)
        {
                $this->DataInicio = $DataInicio;

                return $this;
        }

        /**
         * Get the value of DataDevolucao
         */ 
        public function getDataDevolucao()
        {
                return $this->DataDevolucao;
        }

        /**
         * Set the value of DataDevolucao
         *
         * @return  self
         */ 
        public function setDataDevolucao($DataDevolucao)
        {
                $this->DataDevolucao = $DataDevolucao;

                return $this;
        }

        /**
         * Get the value of DataFinal
         */ 
        public function getDataFinal()
        {
                return $this->DataFinal;
        }

        /**
         * Set the value of DataFinal
         *
         * @return  self
         */ 
        public function setDataFinal($DataFinal)
        {
                $this->DataFinal = $DataFinal;

                return $this;
        }

        /**
         * Get the value of ValorDia
         */ 
        public function getValorDia()
        {
                return $this->ValorDia;
        }

        /**
         * Set the value of ValorDia
         *
         * @return  self
         */ 
        public function setValorDia($ValorDia)
        {
                $this->ValorDia = $ValorDia;

                return $this;
        }

        /**
         * Get the value of ValorFinal
         */ 
        public function getValorFinal()
        {
                return $this->ValorFinal;
        }

        /**
         * Set the value of ValorFinal
         *
         * @return  self
         */ 
        public function setValorFinal($ValorFinal)
        {
                $this->ValorFinal = $ValorFinal;

                return $this;
        }

        /**
         * Get the value of Desconto
         */ 
        public function getDesconto()
        {
                return $this->Desconto;
        }

        /**
         * Set the value of Desconto
         *
         * @return  self
         */ 
        public function setDesconto($Desconto)
        {
                $this->Desconto = $Desconto;

                return $this;
        }



        /**
         * Get the value of MultaDia
         */ 
        public function getMultaDia()
        {
                return $this->MultaDia;
        }

        /**
         * Set the value of MultaDia
         *
         * @return  self
         */ 
        public function setMultaDia($MultaDia)
        {
                $this->MultaDia = $MultaDia;

                return $this;
        }

        /**
         * Get the value of MultaTotal
         */ 
        public function getMultaTotal()
        {
                return $this->MultaTotal;
        }

        /**
         * Set the value of MultaTotal
         *
         * @return  self
         */ 
        public function setMultaTotal($MultaTotal)
        {
                $this->MultaTotal = $MultaTotal;

                return $this;
        }



        /**
         * Get the value of Cliente_CodCliente
         */ 
        public function getCliente_CodCliente()
        {
                return $this->Cliente_CodCliente;
        }

        /**
         * Set the value of Cliente_CodCliente
         *
         * @return  self
         */ 
        public function setCliente_CodCliente($Cliente_CodCliente)
        {
                $this->Cliente_CodCliente = $Cliente_CodCliente;

                return $this;
        }

        /**
         * Get the value of HoraInicial
         */ 
        public function getHoraInicial()
        {
                return $this->HoraInicial;
        }

        /**
         * Set the value of HoraInicial
         *
         * @return  self
         */ 
        public function setHoraInicial($HoraInicial)
        {
                $this->HoraInicial = $HoraInicial;

                return $this;
        }

        /**
         * Get the value of HoraTermino
         */ 
        public function getHoraTermino()
        {
                return $this->HoraTermino;
        }

        /**
         * Set the value of HoraTermino
         *
         * @return  self
         */ 
        public function setHoraTermino($HoraTermino)
        {
                $this->HoraTermino = $HoraTermino;

                return $this;
        }
}

?>