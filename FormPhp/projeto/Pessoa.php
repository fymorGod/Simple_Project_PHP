<?php 
    abstract class Pessoa {
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $exp;

        public function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->exp = 0;
        }



        protected function ganharExp($pontos){
            $this->exp += $pontos;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getIdade(){
            return $this->idade;
        }

        function setIdade($idade){
            $this->idade = $idade;
        }

        function getSexo(){
            return $this->sexo;
        }

        function setSexo($sexo){
            $this->sexo = $sexo;
        }

        function getExp(){
            return $this->exp;
        }

        function setExp($exp){
            $this->exp = $exp;
        }
    }
?>