<?php
    $pdo = new PDO('mysql:host=localhost;dbname=youtube','root','231199Fylip');
    //Debug Errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //insert in database
    if(isset($_POST['nome'])){
        $sql = $pdo ->prepare("INSERT INTO clientes VALUES (null,?,?)");
        $sql->execute(array($_POST['nome'], $_POST['email']));
        echo("Inserido com sucesso!");
    }
?>

<form method="POST">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" value="Enviar">

</form>