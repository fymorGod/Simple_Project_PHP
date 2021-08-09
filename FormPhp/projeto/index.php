<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once "Video.php"; 
        require_once "Aluno.php"; 
        $v[0] = new Videos("Aula 1 de POO");
        $v[1] = new Videos("Aula 2 de POO");
        $v[2] = new Videos("Aula 3 de POO");

        $aluno[0] = new Aluno("Luiz", 21, "M", "Mufina_Gamer");
        $aluno[1] = new Aluno("Fylip", 19, "M", "Fymor");
        print_r($v);
        print_r($aluno);
    ?>
    </pre>
</body>
</html>