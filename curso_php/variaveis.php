<?php 
		include 'header.php';
		$aula_atual = 'variaveis';
	?>


	<body>

		<h2>VARIÁVEIS E CONSTANTES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
		<br>

		<h3>Apresentar valor de variáveis</h3>

		<?php 

			$nome = 'João';
			$saldo = 600.50;
		?>

		<h4>Nome: </h4>
		<p><?php echo $nome; ?></p>

		<br>

		<h4>Saldo: </h4>
		<p><?php echo "Olá $nome, o seu saldo é $saldo"; ?></p>

		<br>

		<h4>Mensagem: </h4>
		<p></p>
		

			




		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>