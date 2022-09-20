<?php
    // na aplicacao real o pdo_safe nao estaria no diretorio exposto na web
    //require_once "pdo_safe/tarefa_controller.php";
    require "tarefa.model.php";
    require "conexao.php";
    require "tarefa.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    if($_GET['acao'] == 'inserir' ) {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
        
        header('Location: nova_tarefa.php?inclusao=1');
    } else if ($acao == 'recuperar') {
        echo "Chegamos ate aqui";
    }
?>  