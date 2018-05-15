<?php 
		include 'header.php';
		$aula_atual = 'tipo-objetos';
	?>


	<body>

		<h2>OBJETOS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>Propriedades</h3>

		<?php

			class carro{
				private $ano;
				private $modelo;
				private $placa;
				private $cpf_dono;

				function __construct($ano,$modelo,$placa,$cpf_dono){

					$this->ano = $ano;
					$this->modelo = $modelo;
					$this->placa = $placa;
					$this->cpf_dono = $cpf_dono;
				}

				public function mostrarInfo(){
					echo 'Ano: ' . $this->ano . '<br>';
					echo 'Modelo: ' . $this->modelo . '<br>';
					echo 'Placa: ' . $this->placa . '<br>';
				}

				public function mostrarCpf(){
					echo 'CPF: ' . $this->cpf_dono;
				}

				public function mudarDono($cpf){
					$this->cpf_dono = $cpf;
				}
			}

			$carro1 = new carro(2018, 'fox', 'aaa2020', '057.164.661-17');
		?>

		<h4>Propriedades do Objeto Carro1: </h4>
		<pre><?php $carro1->mostrarInfo(); ?></pre>

		<h3>Métodos</h3>

		<h4>Dono do Carro1: </h4>
		<p><?php $carro1->mostrarCpf(); ?></p>
		<br>
		
		<h4>---------- Troca do dono do carro ----------</h4>

		<br>
		<?php $carro1->mudarDono('200.300.400-55'); ?>
		<h4>Novo Dono do Carro1: </h4>
		<p><?php $carro1->mostrarCpf(); ?></p>




		

		
	






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>