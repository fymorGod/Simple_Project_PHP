<?php 
    require_once "Pessoa.php";
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        public function receberAum($aum){
            $this->salario += $aum;
        }

        function getEspecialidade(){
            return $this->especialidade;
        }
        function setEspecialidade($esp){
            $this->especialidade = $esp;
        }

        function getSalario(){
            return $this->salario;
        }
        function setSalario($sal){
            $this->salario = $sal;
        }

    }
?>