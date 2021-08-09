<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto - Encap</title>
</head>
<body>
    <h1>Projeto controle remoto</h1>
    <pre>
    <?php
        require_once "Controle.php";
        $c = new Controle();

        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
        $c->fecharMenu();
    ?>
    </pre>
</body>
</html>