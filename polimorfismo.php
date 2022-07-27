<?php 

	class Carro extends Veiculo {
		public $teto_solar = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}
		

		function abrirTetoSolar(){
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante(){
			echo 'Alterar posição volante';
		}
	}

	class Moto extends Veiculo {
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar(){
			echo 'Empinar';
		}
		//polimorfismo, criar uma função na classe filha, com mesmo nome da função da classe
		//pai, porém com função diferente
		function trocarMarcha(){
			echo 'Desengatar embreagem com a mão e engatar macha com o pé';
		}
	}

	class Veiculo {
		public $placa = null;
		public $cor = null;

		function acelerar(){
			echo 'Acelerar';
		}

		function trocarMarcha(){
			echo 'Desengatar embreagem com o pé e engatar macha com a mão';
		}
	}

	$carro = new Carro('ABC1234', 'vermelho');
	$moto = new Moto('DEF5678', 'azul');

	echo $carro->trocarMarcha();
	echo '<br>';
	echo $moto->trocarMarcha();
	?>
