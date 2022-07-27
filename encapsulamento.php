<?php 
	class Pai{
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';


		//se o método for publico, terá acesso a atributos private
		//precisa respeitar uma regra de negocio

		//o protected funciona da mesma maneira, a diferença é entre a herança de classes pai e filho
		public function getNome(){
			return $this->nome;
		}

		public function setNome($value){
			if (strlen($value) >= 3){
				$this->nome = $value;
			}
		}

		//os métodos funcionam do mesmo jeito, porém para acessar um metodo, private ou
		//protected, o método tem que passar antes por um metodo público, conhecido como 
		//interface
		private function executarMania(){
			echo 'Assobiar';
		}

		protected function responder(){
			echo  'oi';
		}
		

		//pode incluir uma regra para que o método seja utilizado na aplicação, como um if por
		//exemplo.
		public function executarAcao(){
			$this->executarMania();
			echo '<br>';
			$this->responder();
		}


	}

	//publicos estao disponiveis para outros objetos como para as aplicações em se
	$pai = new Pai();
	echo $pai->getNome();
	echo '<br>';
	$pai->setNome('Maria');
	echo '<br>';
	echo $pai->getNome();

	//atributos privados não estao disponiveis para outros objetos como para as aplicações em se
	//privados não estão disponiveis para a aplicação
?>