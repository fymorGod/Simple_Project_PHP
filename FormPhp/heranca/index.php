<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - Parents with Php</title>
</head>
<body>
    <pre>
    <?php 
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";
        require_once "Bolsista.php";

        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $b = new Bolsista();
        $b->setNome("Fymor");

        $p2->setNome("Fylip");
        $p3->setNome("Helena");
        $p4->setNome("Alice");

        $p3->setSexo("F");

        $p2->setCurso("Informatica");
        $p3->setSalario(2500);
        $p4->setSetor("Estoque");

        $p3->receberAum(650);

        $p2->pagarMensalidade();
        $b->pagarMensalidade();
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
    </pre>
</body>
</html>