<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a{
        color: blue;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
        }
</style>
<body>
    <?php
        $valor = isset($_GET["val"])?$_GET["val"]:1;
        $c = 1;
        do{
            $result = $valor * $c;
            echo "$valor x $c = $result<br/>";

            $c++;
        }while($c<=10);
        
    ?>

    <a href="./index.html">Voltar</a>
</body>
</html>