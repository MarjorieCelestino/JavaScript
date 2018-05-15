	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'escopo-variaveis';
	?>


	<body>


		<h2>ESCOPO DAS VARIÁVEIS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Escopo Global x Escopo Local</h3>

			<?php
				
				$num = 10;

				function printNum(){
					global $num;
					$num += 10;
					echo $num;
				}

				function printNum1(){
					static $num;
					$num += 10;
					echo $num;
				}
			?>

			<p>
			<?php printNum(); ?>	
			</p><br>

			<p>
			<?php printNum1(); ?>	
			</p><br>

			<p>
			<?php printNum1(); ?>	
			</p><br>

			<p>
			<?php printNum1(); ?>	
			</p><br>

			

			


		


		<br><br>
		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>