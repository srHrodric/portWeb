<?php
	require "tarefa.model.php";
	require "tarefa.service.php";
	require "conexao.php";

	$acao = (isset($_GET['acao']))? $_GET['acao'] : $acao;
	
	if ($acao == 'inserir') {
		if (!empty($_POST['tarefa'])) {
			try {
				$tarefa = new Tarefa();
				$tarefa->__set('tarefa', $_POST['tarefa']);
			
				$conexao = new Conexao();
			
				$tarefaService = new TarefaService($conexao, $tarefa);
				$tarefaService->inserir();			
				
				header('Location: ../nova_tarefa.php?inclusao=1');
	
			} catch (Exception $e) {
				header('Location: ../nova_tarefa.php?inclusao=2');	
			}
		} else{
	
			header('Location: ../nova_tarefa.php?inclusao=3');
		}
	}	 elseif ($acao == 'recuperar') {
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperar();

	}	 elseif ($acao == 'atualizar'){

		$tarefa = new Tarefa();
		$tarefa->__set('id',$_POST['id']);
		$tarefa->__set('tarefa',$_POST['tarefa']);
		
		$conexao = new Conexao();
		$tarefaService = new TarefaService($conexao, $tarefa);
		
		if ($tarefaService->atualizar()){
			header('Location: ../index.php');
		}

	}	 elseif ($acao == 'remover'){

		$tarefa = new Tarefa();
		$tarefa->__set('id',$_GET['id']);
		
		$conexao = new Conexao();
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->remover();

		header('Location: index.php');
	}	elseif ($acao == 'remover2'){

		$tarefa = new Tarefa();
		$tarefa->__set('id',$_GET['id']);
		
		$conexao = new Conexao();
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->remover();
		
		header('Location: todas_tarefas.php');
	}
	 elseif ($acao == 'realizada'){

		$tarefa = new Tarefa();
		$tarefa->__set('id',$_GET['id']);
		
		$conexao = new Conexao();
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->realizada();

		header('Location: index.php');
	}
?>