<?php 
	
	//definir modelo
	//class Funcionario = Entidade

	class Funcionario {

		//atributos-Caracteristicas
		public $nome = 'José';
		public $telefone = '11 99999-8888';
		public $numFilhos = 2;

		//getters setters

		
		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function setNome($nome){
			$this->nome = $nome;
		}


		function getNome(){
			return $this->nome;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}


		//métodos-ações

		function resumirCardFunc(){
			return "$this->nome possui $this->numFilho filho(s)";
		}
		
		
	}



	//$y $x $z = Identidade-objeto
	$y = new Funcionario();
	$y->setNome('José');
	$y->setNumFilhos(2);
	echo $y->getNome() . " possui " . $y->getNumFilhos(). " filho(s)";
	
	echo "<br>";
	$x = new Funcionario();
	$x->setNome('Maria');
	$x->setNumFilhos(0);
	echo $x->getNome() . " possui " . $x->getNumFilhos(). " filho(s)";
	
	$z = new Funcionario();
	




?>