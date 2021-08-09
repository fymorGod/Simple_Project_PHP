<?php
    require_once "Mamifero.php";
    class Reptil extends Mamifero{
        private $corEscama;

        function locomover()
        {
            echo "<p>Rastejando</p>";
            
        }
        function alimentar()
        {
            echo "<p>Comendo Vegetais</p>";
        }
        function emitirSom()
        {
            echo "<p>Som de Réptil</p>";
            
        }

        function getCorEscama(){
            return $this->corEscama;
        }
        function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }

?>