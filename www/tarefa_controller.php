<?php
    // na aplicacao real o pdo_safe nao estaria no diretorio exposto na web
    //require_once "pdo_safe/tarefa_controller.php";
    require "tarefa.model.php";
    require "conexao.php";
    require "tarefa.service.php";



    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();
    
    

?>  