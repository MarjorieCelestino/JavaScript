	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		

		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
				
				$agora = time();
				echo $agora .  ' - ';
				echo date("d m Y", $agora);

			?>
			
		</p>
		<br>

		<h3>Função mktime</h3>

			<?php
				
				//hora, min, seg, mes, dia, ano
				$nascimento = mktime(0, 0, 0, 12, 22, 1995);
				echo $nascimento . ' - ';
				echo date("d m Y", $nascimento);
				
			?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>

			<?php
				//dec 22 1995 - now - yesterday - now + 4weeks - now + 4weeks monday
				$outra_data = strtotime("now");
				echo date("d m Y", $outra_data);
				
			?>

		<p>

		</p>
		<br>


		<h3>Função date</h3>

			<?php

				echo date("d/m/Y H:i:s", $outra_data);
				
			?>

		<p>

		</p>
		<br>

		<h3>Fuso horário</h3>

			<?php

				date_default_timezone_set('America/Sao_Paulo');
				echo date_default_timezone_get();
				
			?>			

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

			<?php

				$data_entrega = strtotime('27 dec 2017');
				$data_esperada = strtotime('24 dec 2017');
				echo date("d/m/Y",$data_entrega);
				echo '<br>';
				echo date("d/m/Y",$data_esperada);
				echo '<br>';

				if ($data_entrega > $data_esperada) {
					$atraso = $data_entrega - $data_esperada;
					echo 'Produto entregue com atraso de ' . date('d', $atraso) . ' dias' ;
				}else{
					echo 'Produto entregue no prazo';
				}


			?>

		<p>

		</p>
		<br>


		




		<h3>Tabela de caracteres da função date</h3>

		


		<?php include 'tabela-date.php'; ?>


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>