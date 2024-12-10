<?php
$teste = (isset($_GET['inclusao'])) ? $_GET['inclusao'] : '';

require 'assets/menu_text.php';
require_once 'assets/header.php';
require_once 'assets/menu_text.php';

if ($teste == 1) {
?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
	    <h5><?php echo $aviso_tarefa_sucesso?></h5>
    </div>
<?php } elseif($teste == 2) { ?>
    
    <div class="bg-danger pt-2 text-white d-flex justify-content-center">
	    <h5><?php echo $aviso_tarefa_erro?></h5>
    </div>

    <?php }elseif($teste == 3){ ?>
        <div class="bg-warning pt-2 text-white d-flex justify-content-center">
	        <h5><?php echo $aviso_tarefa_vazia?></h5>
        </div>
    <?php } ?>