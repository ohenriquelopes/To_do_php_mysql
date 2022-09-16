<?php
/*
echo "alalalala";
echo "<h1>H!</h1>";

// faz a conecao com o Mysql
// o host esta com o nome do servico no dockerfile
//$dsn = 'mysql:host=mysql;dbname=my_app;port:3306';
//$user = 'root';
//$pass = 'root';

try {
    $dbh = new PDO($dsn, $user, $pass);
    /*
    $query = '
        create table if not exists usuarios(
            id int not null primary key auto_increment,
            nome varchar(50) not null,
            email varchar(100) not null,
            senha varchar(32) not null
        )
    ';

    $dbh->exec($query);
   

    $query = '
            insert into usuarios(
                nome, email, senha
            ) values (
                "Henrique", "henrique@teste.com.br", "1234"
            )
    ';

    $retorno = $dbh->exec($query);

    $query = '
    insert into usuarios(
        nome, email, senha
    ) values (
        "Isabelle", "isabelle@teste.com.br", "1234"
    )
    ';

    $retorno = $dbh->exec($query);

    $query = '
    insert into usuarios(
        nome, email, senha
    ) values (
        "Joao", "Joao@teste.com.br", "1234"
    )
    ';

    $retorno = $dbh->exec($query);


     */

    $query = '
        select * from usuarios
    ';

    // $stmt = $dbh->query($query); //foreach abaixo substitui esse
    foreach($dbh->query($query) as $key => $value) {
        print_r($value);
        echo '<hr>';
    }

    // $lista = $stmt->fetchALL(); // volta os arrays com indice numero e associativo juntos
    //$lista = $stmt->fetchALL(PDO::FETCH_ASSOC);
    // $lista = $stmt->fetchALL(PDO::FETCH_OBJ); // retorna em obj e nao array
    

    /*
    echo '<pre>';
    print_r($lista);
    echo '</pre>';
    */
        /*
    foreach ($lista as $key => $value) {
        echo($value['nome']);
        echo '<hr>';
    }

    */

    //echo $lista[1][1]; // acessa o array dentro do array
    //echo $lista[1]->nome; // acessa o objeto dentro do araray (FETCH_OBJ)

    // "trata" a mensagem de erro para ficar mais legivel
} catch(PDOException $e) {
    echo 'Erro:' .$e->getCode(). 'Mensagem: ' . $e->getMessage();
}
echo '<h1>aaaaAAAAADASDADASAAAa</h1>';


?>