<?php
    require_once "Animal.php";
    class Mamifero extends Animal{
        private $corPelo;

        function locomover()
        {
            echo "<p>Correndo</p>";
            
        }
        function alimentar()
        {
            echo "<p>Mamando</p>";
        }
        function emitirSom()
        {
            echo "<p>Som de mamífero</p>";
            
        }

        function getCorPelo(){
            return $this->corPelo;
        }
        function setCorPelo($cor){
            $this->corPelo = $cor;
        }
    }
?>