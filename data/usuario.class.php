<?php

     class Usuario{
        private $Usuario;
        private $Password;


    public function __construct($Usuario, $Password){
        $this->Usuario = $Usuario;
        $this->Password = $Password;
        }
        

        /**
         * Get the value of Usuario
         */ 
        public function getUsuario(){
                return $this->Usuario;
        }

        /**
         * Set the value of Usuario
         *
         * @return  self
         */ 
        public function setUsuario($Usuario)
        {
                $this->Usuario = $Usuario;

                return $this;
        }

        /**
         * Get the value of Password
         */ 
        public function getPassword()
        {
                return $this->Password;
        }

        /**
         * Set the value of Password
         *
         * @return  self
         */ 
        public function setPassword($Password)
        {
                $this->Password = $Password;

                return $this;
        }
    

}