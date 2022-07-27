<?php 
	
	//definir modelo
	//class Funcionario = Entidade

	class Funcionario {

		//atributos-Caracteristicas
		public $nome = 'José';
		public $telefone = '11 99999-8888';
		public $numFilhos = 2;
		public $cargo = null;
		public $salario = null;

		//getters setters (overloading / sobrecarga)

		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}


		function __get($atributo){
			return $this->$atributo;
		}





		
		/*function setNumFilhos($numFilhos){
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


		//métodos-ações*/

		function resumirCardFunc(){
			return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s)';
		}
		
		
	}



	//$y $x $z = Identidade-objeto
	$y = new Funcionario();
	$y->__set('nome', 'José');
	$y->__set('numFilhos', 2);
	echo $y->__get('nome') . " possui " . $y->__get('numFilhos'). " filho(s)";
	echo "<br>";
	echo $y->resumirCardFunc();
	
	/*echo "<br>";
	$x = new Funcionario();
	$x->setNome('Maria');
	$x->setNumFilhos(0);
	echo $x->getNome() . " possui " . $x->getNumFilhos(). " filho(s)";
	
	$z = new Funcionario();*/
?>	