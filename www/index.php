<?php

echo "alalalala";
echo "<h1>H!</h1>";

$dsn = 'mysql:host=mysql;dbname=my_app;port:3306';
$user = 'root';
$pass = 'root';

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
    echo 'Erro:' .$e->getCode(). 'Mensagem: ' . $e->getMessage();
}
echo '<h1>aaaaAAAAADASDADASAAAa</h1>';


?>