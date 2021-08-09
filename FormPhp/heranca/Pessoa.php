<?php 
    //Classe modelo - ela não pode ser instanciada
    abstract class Pessoa{
        private $nome;
        private $idade;
        private $sexo;

        //Métodos Públicos

       public final function fazerAniver(){
            $this->idade++;
        }

        //métodos básicos
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
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
    }
?>