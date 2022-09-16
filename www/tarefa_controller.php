<?php
    // na aplicacao real o pdo_safe nao estaria no diretorio exposto na web
    //require_once "pdo_safe/tarefa_controller.php";
    require "pdo_safe/tarefa.model.php";
    require "conexao.php";
    require "pdo_safe/tarefa.service.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
    

    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';

?>  