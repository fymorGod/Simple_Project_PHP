<?php 
    require_once "Mamifero.php";
    class Cachorro extends Mamifero {
        function emitirSom()
        {
            echo "Latindo...";
        }

        function reagirDono($dono){
            if ($dono){
                echo "abanando o rabo";
            }
            else {
                echo "rosnar e latir";
            }
        }
    }
?>