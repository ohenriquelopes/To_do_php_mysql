<?php

/*
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=mysql;dbname=my_app;port:3306';
        $user = 'root';
        $pass = 'root';
    
    
        try {
            $dbh = new PDO($dsn, $user, $pass);

            /* vulneravel a sql injection
            $query = "select * from usuarios where ";
            $query .= " email = '{$_POST['usuario']}' "; // .= concatenacao junto com atribuicao
            $query .= " AND senha = '{$_POST['senha']}' ";
            echo $query;

            $stmt = $dbh->query($query);
            $usuario = $stmt->fetch();
            echo '<hr >';

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';
            */

            $query = "select * from usuarios where ";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha ";

            // metodo prepare
            $stmt = $dbh->prepare($query);

            // bindvalue trata a requisicao pra enviar para a query
            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            // executa a query
            $stmt->execute();

            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';


        } catch(PDOException $e) {
            echo 'Erro:' .$e->getCode(). 'Mensagem: ' . $e->getMessage();
        }
    }   



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="injection.php">
        <input type="text" placeholder="Usuario" name="usuario"/>
        <br/>
        <input type="password" placeholder="Senha" name="senha"/>
        <br/>
        <button type="submit">Login</button>
    </form>
</body>
</html>