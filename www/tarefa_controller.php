<?php
    // na aplicacao real o pdo_safe nao estaria no diretorio exposto na web
    //require_once "pdo_safe/tarefa_controller.php";
    require "tarefa.model.php";
    require "conexao.php";
    require "tarefa.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    if($acao == 'inserir' ) {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
        
        header('Location: nova_tarefa.php?inclusao=1');

    } else if ($acao == 'recuperar') {
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    } else if ($acao == 'atualizar') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id'])
                ->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        if ($tarefaService->atualizar()) {
            header('location: todas_tarefas.php');
        }
    }
?>  