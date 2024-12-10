<?php

class Conexao {

	private $host = 'fdb31.biz.nf';
	private $dbname = '4024294_geral';
	private $user = '4024294_geral';
	private $pass = 'WTNn84Un2^kB';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>