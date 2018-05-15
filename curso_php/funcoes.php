	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'funcoes';
	?>


	<body>


		<h2>FUNÇÕES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Função simples sem argumento</h3>

		<?php

			function ola_mundo(){
				echo "Olá mundo";
				echo "<br>";
				echo "Fim da função";
			}

			ola_mundo();

		?>

		<h3>Função com argumentos</h3>

		<?php

			function soma($num1, $num2){
				$soma = $num1 + $num2;
				echo $soma;
			}

			soma(1, 1);

		?>

		<h3>Função com argumento e valor default</h3>

		<?php

			function ola_cliente($nome = "cliente"){
				echo "Olá $nome";
			}

			ola_cliente();

		?>

		<h3>echo ou return?</h3>

		<?php

			function media($num1, $num2){
				$media = ($num1 + $num2)/2;
				return $media;
			}

			$media_numeros = media(6, 8);

			echo $media_numeros;
		?>




		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>