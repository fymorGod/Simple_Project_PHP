<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank - PhpBank Fy</title>
</head>
<body>
    <pre>
    <?php
    //criação das contas
        require_once "Conta.php";
        $p1 = new Conta();
        $p2 = new Conta();

        //Conta do primeiro usuário e suas ações
        $p1->abriConta("CC");
        $p1->setDono("Fylip");
        $p1->setnumConta(111);

        $p1->depositar(300);

        $p1->pagarMensal();

        $p1->saque(338);
        $p1->fecharConta();

        //Conta do segundo usuário e suas ações 
        $p2->abriConta("CP");
        $p2->setDono("Helena");
        $p2->setNumConta(222);

        $p2->depositar(500);

        $p2->saque(100);

        $p2->pagarMensal();

        $p2->saque(530);
        $p2->fecharConta();
        print_r($p1);

        print_r($p2);
    ?>
    </pre>
</body>
</html>