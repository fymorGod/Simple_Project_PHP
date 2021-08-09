<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="content">
    <?php
        $valor = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h2>Fatorial de $valor é: <br/><h2/>";
        $c = $valor;
        $fat = 1;
        do{
            $fat = $fat*$c;
            $c--;
        }while($c>=1);
        echo "<h2> $fat <h2/>";
        ?>
        <a href="./index.html">Voltar</a>
   </div>
</body>
</html>