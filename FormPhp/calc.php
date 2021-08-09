<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Testes</title>

    <style>
        span.foco{
            color: red;
        }

    </style>
</head>
<body>
    <?php 
        $num = isset($_GET["num"])?$_GET["num"]:0;
        $oper = isset($_GET["oper"])?$_GET["oper"]:1;

        switch ($oper){
            case 1:
                $r = $num * 2;
                break;
            case 2:
                $r = pow($num, 3);
                break;
            case 3:
                $r = sqrt($num);
                break;
        }


        echo "<h2>O resultado da operação solicitade foi <span class='foco'>$r<span/><h2/>";
    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>