<?php 
    require_once "Animal.php";
    class Ave extends Animal{
        private $corPena;

        function locomover()
        {
            echo "<p>Voando</p>";
            
        }
        function alimentar()
        {
            echo "<p>Comendo Frutas</p>";
        }
        function emitirSom()
        {
            echo "<p>Som de Ave</p>";
            
        }
        function fazerNinho(){
            echo "construindo um ninho";
        }

        function getCorEscama(){
            return $this->corPena;
        }
        function setCorEscama($corPena){
            $this->corPena = $corPena;
        }
    }
?>