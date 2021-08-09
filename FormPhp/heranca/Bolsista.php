<?php 
    require_once "Aluno.php";
    class Bolsista extends Aluno{
        private $bolsa;

        public final function removerBolsa(){
            $this->setBolsa(true);
        }

        //@override in Php
        public function pagarMensalidade(){
            echo "<p>O aluno ".$this->getNome().
            " é bolsista, logo paga com desconto a mensalidade.</p>";
        }


        function getBolsa(){
            return $this->bolsa;
        }
        function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }
?>