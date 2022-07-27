<?php 
	
	//definir modelo
	//class Funcionario = Entidade

	class Funcionario {

		//atributos-Caracteristicas
		public $nome = 'José';
		public $telefone = '11 99999-8888';
		public $numFilhos = 2;

		//métodos-ações

		function resumirCardFunc(){
			return "$this->nome possui $this->numFilhos filho(s)";
		}
		
		function modificarNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function modificarNome($nome){
			$this->nome = $nome;
		}

	}



	//$y $x $z = Identidade-objeto
	$y = new Funcionario();
	echo $y->resumirCardFunc();


	$y->modificarNumFilhos(3);
	echo '<br>';
	echo $y->resumirCardFunc();
	echo '<hr>';

	$x = new Funcionario();
	echo $x->resumirCardFunc();
	echo '<br>';
	$x->modificarNumFilhos(1);
	echo $x->resumirCardFunc();
	echo '<hr>';

	$z = new Funcionario();
	echo $z->resumirCardFunc();
	$z->modificarNome('Maria');
	$z->modificarNumFilhos(5);
	echo '<br>';
	echo $z->resumirCardFunc();




?>