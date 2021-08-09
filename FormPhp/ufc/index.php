<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
</head>
<body>
    <pre>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";
    $l = array();
        $l[1] = new Lutador(
            "Luiz",
            "Brasil",
            1.83,
            38,
            86.8,
            5,
            0,
            2
        );
        $l[2] = new Lutador("Fylip", "USA", 1.90,35,89.2,4,1,3);

        $uec01 = new Luta();
        $uec01->marcarLuta($l[1], $l[2]);
        $uec01->lutar();

        // $l[1]->status();
        // $l[2]->status();
    ?>
    </pre>
</body>
</html>