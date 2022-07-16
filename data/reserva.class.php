<?php

    public class Reserva{
        private $CodReserva;
        private $DataReservaInicio;
        private $DataReservaFim;
        private $StatusReserva;
        private $Cliente_CodCliente;
        private $HoraReservaInicial;
        private $HoraReservaTermino;
    }

    public function __construct($CodReserva, $DataReservaInicio,
        $DataReservaFim, $StatusReserva , $Cliente_CodCliente , $HoraReservaInicial,
        $HoraReservaTermino){
        $this->CodReserva = $CodReserva;
        $this->DataReservaInicio = $DataReservaInicio;
        $this->DataReservaFim = $DataReservaFim;
        $this->StatusReserva = $StatusReserva;
        $this->Cliente_CodCliente = $Cliente_CodCliente;
        $this->HoraReservaInicial = $HoraReservaInicial;
        $this->HoraReservaTermino = $HoraReservaTermino;

        /**
         * Get the value of CodReserva
         */ 
        public function getCodReserva()
        {
                return $this->CodReserva;
        }

        /**
         * Set the value of CodReserva
         *
         * @return  self
         */ 
        public function setCodReserva($CodReserva)
        {
                $this->CodReserva = $CodReserva;

                return $this;
        }

        /**
         * Get the value of DataReservaInicio
         */ 
        public function getDataReservaInicio()
        {
                return $this->DataReservaInicio;
        }

        /**
         * Set the value of DataReservaInicio
         *
         * @return  self
         */ 
        public function setDataReservaInicio($DataReservaInicio)
        {
                $this->DataReservaInicio = $DataReservaInicio;

                return $this;
        }

        /**
         * Get the value of DataReservaFim
         */ 
        public function getDataReservaFim()
        {
                return $this->DataReservaFim;
        }

        /**
         * Set the value of DataReservaFim
         *
         * @return  self
         */ 
        public function setDataReservaFim($DataReservaFim)
        {
                $this->DataReservaFim = $DataReservaFim;

                return $this;
        }

        /**
         * Get the value of StatusReserva
         */ 
        public function getStatusReserva()
        {
                return $this->StatusReserva;
        }

        /**
         * Set the value of StatusReserva
         *
         * @return  self
         */ 
        public function setStatusReserva($StatusReserva)
        {
                $this->StatusReserva = $StatusReserva;

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
         * Get the value of HoraReservaInicial
         */ 
        public function getHoraReservaInicial()
        {
                return $this->HoraReservaInicial;
        }

        /**
         * Set the value of HoraReservaInicial
         *
         * @return  self
         */ 
        public function setHoraReservaInicial($HoraReservaInicial)
        {
                $this->HoraReservaInicial = $HoraReservaInicial;

                return $this;
        }

        /**
         * Get the value of HoraReservaTermino
         */ 
        public function getHoraReservaTermino()
        {
                return $this->HoraReservaTermino;
        }

        /**
         * Set the value of HoraReservaTermino
         *
         * @return  self
         */ 
        public function setHoraReservaTermino($HoraReservaTermino)
        {
                $this->HoraReservaTermino = $HoraReservaTermino;

                return $this;
        }
        }


