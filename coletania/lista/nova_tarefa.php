<?php
require './assets/mensagem_retorno.php';
?>
<div class="container app">
	<div class="row">
		<div class="col-md-3 menu">
			<ul class="list-group">
				<li class="list-group-item"><a href="index.php"><?php echo $tarefa_pendente; ?></a></li>
				<li class="list-group-item active"><a href=""><?php echo $nova_tarefa; ?></a></li>
				<li class="list-group-item"><a href="todas_tarefas.php"><?php echo $todas_tarefas; ?></a></li>
			</ul>
		</div>

		<div class="col-md-9">
			<div class="container pagina">
				<div class="row">
					<div class="col">
						<h4><?php echo $nova_tarefa ?></h4>
						<hr />

						<form method="POST" action="./php/tarefa_controller.php?acao=inserir">
							<div class="form-group">
								<label><?php echo $label_nova_tarefa;?></label>
								<input type="text" class="form-control" name="tarefa">
							</div>

							<button class="btn btn-success"><?php echo $botao_cadastro?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once './assets/footer.php'; ?>