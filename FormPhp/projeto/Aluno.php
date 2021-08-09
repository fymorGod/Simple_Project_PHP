<?php 
    require_once "Pessoa.php";

    class Aluno extends Pessoa{
        private $login;
        private $toAssistindo;

        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->toAssistindo = 0;
        }

        function getToAssistindo(){
            $this->toAssistindo++;
        }
        function setToAssistindo($toAssistindo){
            $this->toAssistindo = $toAssistindo;
        }

        function getLogin(){
            return $this->login;
        }
        function setLogin($login){
            $this->login = $login;
        }
    }
?>