<?php
    class Lutador{
        private $nome;
        private $idade;
        private $nacionalidade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        function __construct($no,$na,$altura, $idade,$peso,$vitorias,$derrotas,$empates)
        {
            $this->nome = $no;
            $this->altura = $altura;
            $this->idade = $idade;
            $this->nacionalidade = $na;
            $this->setPeso($peso);
            $this->vitorias = $vitorias;
            $this->derrotas = $derrotas;
            $this->empates = $empates;
        }

        //métodos especiais
        public function apresentar(){
            echo "<p>-------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador ".$this->getNome();
            echo " veio diretamente do ".$this->getNacionalidade();
            echo " tem ".$this->getIdade(). " anos e pesa " .$this->getPeso() . " KG";
            echo "<br> Ele tem ".$this->getVitorias() ." vitórias ";
            echo $this->getDerrotas(). " derrotas e ". $this->getEmpates() . " empates.</p>";
        }

        function status(){
            echo "<p> -----------------------</p>";
            echo "<p> ".$this->getNome() . " é um peso " .$this->getCategoria();
            echo " e já ganhou ".$this->getVitorias() . " vezes,";
            echo " perdeu ". $this->getDerrotas() . " vezes e ";
            echo " empatou ".$this->getEmpates() . " vezes."; 
        }

        function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        function perderLuta(){
            $this->setDerrotas($this->getVitorias() + 1);
        }

        function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        //métodos base
        public function getNome(){
            return $this->nome;
        }
        public function setNome($no){
            $this->nome = $no;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function setNacionalidade($na){
            $this->nacionalidade = $na;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }
        public function getCategoria(){
            return $this->categoria;
        }
        private function setCategoria(){
            if($this->getPeso() < 52.2){
                $this->categoria="Inválido";
            }else if($this->getPeso() <=70.3){
                $this->categoria="Leve";
            }else if($this->getPeso() <=83.9){
                $this->categoria="Médio";
            }else if($this->getPeso() <=120.2){
                $this->categoria="Pesado";
            }else{
                $this->categoria="Inválido";
            }
        }
        public function getVitorias(){
            return $this->vitorias;
        }
        public function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        public function getDerrotas(){
            return $this->derrotas;
        }
        public function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        public function getEmpates(){
            return $this->empates;
        }
        public function setEmpates($empates){
            $this->empates = $empates;
        }
    }

?>