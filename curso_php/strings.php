<?php 
		include 'header.php';
		$aula_atual = 'strings';
	?>


	<body>

		<h2>STRINGS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Exemplo do IBAN - Trabalhando com Strings</h3>

			<?php
				$iban = "pt50000067263827616176433";
				$status = "Ativo";
				$senha = "45p87a06";
			?>

			<h4>Número do IBAN:</h4>
			<p><?php echo $iban; ?></p>
			<br>

			<h4>Número de caracteres:</h4>
			<p><?php echo strlen($iban); ?></p>
			<br>

			<h4>1o, 4o e 8o digitos da senha:</h4>
			<p><?php echo $senha[0] . $senha[3] . $senha[7]; ?></p>
			<br>

			<h4>Código do País:</h4>
			<p><?php  echo substr($iban, 0, 4); ?></p>
			<br>

			<h4>Número da conta:</h4>
			<p><?php  echo substr($iban, 4); ?></p>
			<br>




		<h3>Como limpar strings</h3>

			<?php

				$email = "      ivanlourencogomes@gmail.com  ";
				$site = "http://www.ivanlourencogomes.com"

			?>
			

			<h4>Email:</h4>
			<p class="pre"><?php  echo trim($email); ?></p>
			<br>

			<h4>Site:</h4>
			<a href="<?php  echo $site; ?>"><?php  echo trim($site, "http://"); ?></a>
			<br>


		<h3>Agora é a sua vez</h3>

			<p>Use este espaço para testar novas funções com strings.</p>
			<br>







	<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>