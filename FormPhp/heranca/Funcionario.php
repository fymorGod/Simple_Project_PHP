<?php
    require_once "Pessoa.php";
    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        function __construct()
        {
            $this->setTrabalhando(true);
        }

        public function mudarTrabalho(){
            $this->trabalhando = ! $this->trabalhando;
        }

        function getsetor(){
            return $this->setor;
        }
        function setSetor($setor){
            $this->setor = $setor;
        }
        function getTrabalhando(){
            return $this->trabalhando;
        }
        function setTrabalhando($trab){
            $this->trabalhando = $trab;
        }
    }

?>