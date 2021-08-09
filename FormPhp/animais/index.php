<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals - OOP</title>
</head>
<body>
    <?php
        require_once "Mamifero.php";
        require_once "Peixe.php";
        require_once "Ave.php";
        require_once "Reptil.php";
        require_once "Cachorro.php";

        $m = new Mamifero();
        $m->setPeso(45.5);
        $m->locomover();

        $ave = new Ave();
        $ave->locomover();

        $reptil = new Reptil();
        $reptil->locomover();

        $cachorro = new Cachorro();
        $cachorro->reagirDono(false);
    ?>
</body>
</html>