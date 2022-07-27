<?php 
	
	//definir modelo
	//class Funcionario = Entidade

	class Pessoa {

		public $nome = null;

		function __construct($nome){
			echo 'Objeto iniciado <br>';
			$this->nome = $nome;
		}

		function __destruct(){
			echo 'Objeto removido';
		}

		function __get($atributo){
			return $this->$atributo;
		}

		function correr(){
			return $this->__get('nome') . ' está correndo';
		}
	}

	$pessoa = new Pessoa('Jorge');
	echo 'Nome: ' . $pessoa->__get('nome');
	echo '<br>' . $pessoa->correr();
	echo '<br>';
	unset($pessoa);//no fim da interpretação também é chamado o destruct

?>