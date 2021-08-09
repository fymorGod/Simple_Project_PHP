<?php
    require_once "Pessoa.php";
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "<p>O aluno ". $this->getNome(). " pagou a mensalidade.</p>";
        }

        public final function cancelarMatricula(){
            echo "Matrícula cancelada...";
        }

        function getMatricula(){
            return $this->matricula;
        }
        function setMatricula($mat){
            $this->matricula = $mat;
        }

        function getCurso(){
            return $this->curso;
        }
        function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>