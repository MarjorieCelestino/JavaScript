	<?php 
		include 'header.php';
		$aula_atual = 'valida-formularios';
	?>

	<?php

		function clean_input($data){
			//removes white spaces
			$clean_data = trim($data);
			//removes back slashes
			$clean_data = stripslashes($clean_data);
			//removes special characters
			$clean_data = htmlspecialchars($clean_data);

			return $clean_data;
		}

	?>

	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Envie seus dados</h3>
		
		<?php

			if ($_SERVER['REQUEST_METHOD'] == 'POST'){

				$nome = $_POST['nome'];
				$email = $_POST['email'];

				if ($nome == '' || $nome == null) {
					$erro_nome = '* O nome é obrigatório';
				}elseif ($email== '' || $email == null) {
					$erro_email = '* O e-mail é obrigatório';
				}elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
					
					$erro_email = '* O e-mail informado é inválido';
				}else{
					$nome = clean_input($nome);
					$email = clean_input($email);


					$server = 'localhost';
					$user = 'root';
					$password = 'root';
					$db_name = 'curso_php';
					$port = '8889';

					$db_connect = new MySQLi($server, $user, $password, $db_name, $port);

					if($db_connect->connect_error == true){
						$msg_envio = 'Erro de conexão';
					}else{

						$sql = "INSERT INTO clientes(nome, email) VALUES ( '$nome', '$email')";

						if($db_connect->query($sql) == true){
							$nome = NULL;
							$email = NULL;
							$msg_envio =  'Usuário criado';
						}else{
							$msg_envio = 'Não foi possivel enviar o formulário ' . MySQLi_error($db_connect);
						}
					}
				}
			}

		?>


		<form action="valida-formularios.php" method="post">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field" value="<?php echo $nome; ?>">
			<br>
			<div class="erro-form"><?php echo $erro_nome;?></div>
			<br>
			
			E-mail: *
			<br>
			<input type="text" name="email" class="field" value="<?php echo $email; ?>">
			<br>
			<div class="erro-form"><?php echo $erro_email; ?></div>
			<br>

			<input type="submit" name="submit" class="submit"><br>
			<div class="sucesso-form"><?php echo $msg_envio; ?></div>

		</form>

		<h3>Confirmaçao</h3>
		<p>Obrigado!</p>
		<br>

		<pre>
		<?php

			print_r($_POST);

		?>
		</pre>

		



		

		

		
		








		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>