<?php
$acao = 'recuperar';
require_once './php/tarefa_controller.php';

require './assets/menu_text.php';
require_once './assets/header.php';
?>
<script>
	function remover(id){
		location.href = 'todas_tarefas.php?acao=remover2&id='+id;
	}

	function editar(id,txt_tarefa) {
		let form = document.createElement('form');
		form.action = './php/tarefa_controller.php?acao=atualizar';
		form.method = 'POST';
		form.className = 'row';

		let inputTarefa = document.createElement('input');
		inputTarefa.value = txt_tarefa;
		inputTarefa.type = 'text';
		inputTarefa.name = 'tarefa';
		inputTarefa.className = 'col-9 form-control';

		let inputId = document.createElement('input');
		inputId.type = 'hidden';
		inputId.name = 'id';
		inputId.value = id;

		let button = document.createElement('button');
		button.type = 'submit';
		button.className = 'col-3 btn btn-info';
		button.innerHTML = 'Atualizar';

		form.appendChild(inputTarefa);
		form.appendChild(inputId);
		form.appendChild(button);

		let tarefa = document.getElementById('tarefa_' + id);
		
		tarefa.innerHTML = '';
		tarefa.insertBefore(form,tarefa[0]);
	}
</script>
<div class="container app">
	<div class="row">
		<div class="col-sm-3 menu">
			<ul class="list-group">
				<li class="list-group-item"><a href="index.php"><?php echo $tarefa_pendente; ?></a></li>
				<li class="list-group-item"><a href="nova_tarefa.php"><?php echo $nova_tarefa; ?></a></li>
				<li class="list-group-item active"><a href=""><?php echo $todas_tarefas; ?></a></li>
			</ul>
		</div>

		<div class="col-sm-9">
			<div class="container pagina">
				<div class="row">
					<div class="col">
						<h4><?php echo $todas_tarefas ?></h4>
						<hr />
						<?php
						foreach ($tarefas as $indice => $tarefa) { ?>

							<div class="row mb-3 d-flex align-items-center tarefa">
								<div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
									<?php echo $tarefa->tarefa ?>
								</div>
								<div class="col-sm-3 mt-2 d-flex justify-content-between">
									(
									<?php if ($tarefa->status == 'not_ok') {
										echo '<span class="text-danger">'.$status_tarefa_not_ok.'</span>';
									} elseif ($tarefa->status == 'ok') {
										echo '<span class="text-success">'.$status_tarefa_ok.'</span>';
									} ?>
									)
									<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>									
								</div>
							</div>
							<hr />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once './assets/footer.php'; ?>