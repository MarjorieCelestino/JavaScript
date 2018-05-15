	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'base-dados-mysql';
	?>


	<body>


		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>MySQLi</h3>

		<?php

			$server = 'localhost';
			$user = 'root';
			$password = 'root';
			$db_name = 'curso_php';
			$port = '8889';

			$db_connect = new MySQLi($server, $user, $password, $db_name, $port);

			if($db_connect->connect_error == true){
				echo 'Falha na conexão: ' . $db_connect->connect_error;
			}else{
				echo 'Conectado' . '<br>';

				$sql = "INSERT INTO clientes(nome, email) VALUES ('Lucas', 'lucas@gmail.com')";

				if($db_connect->query($sql) == true){
					echo 'Adicionado';
				}else{
					echo 'Falha na inserção de dados';
				}
			}

		?>
		
			


		

		

		


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>