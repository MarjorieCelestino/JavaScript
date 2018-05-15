<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Meus Cursos</h3>

			<?php 

			$cursos1 = array("Excel", "HTML-CSS", "Python");

			$cursos = array(
				"Excel" => "Excel", 
				"HTML-CSS" => "HTML-CSS", 
				"Python" => "Python"); 

			$cursos2 = array(
				"Excel" => array(
					"n_alunos" => 400,
					"titulo" => "Do zero ao avançado",
					"url" => "http://www.udemy.com",
					"aval" => 200 ), 
				"HTML-CSS" => array(
					"n_alunos" => 300,
					"titulo" => "Aprenda HTML e CSS",
					"url" => "http://www.udemy.com",
					"aval" => 140 ), 
				"Python" => array(
					"n_alunos" => 100,
					"titulo" => "Programe em Python",
					"url" => "http://www.udemy.com",
					"aval" => 50 )
			); 

			?>


		<h3>Informação do Curso</h3>

			<h4>Título: </h4>
			<p><?php echo $cursos2['Excel']['titulo'] ?></p>
			<br>

			<h4>Número de Alunos: </h4>
			<p><?php echo $cursos2['Excel']['n_alunos'] ?></p>
			<br>

			<h4>Número de Avaliações: </h4>
			<p><?php echo $cursos2['Excel']['aval'] ?></p>
			<br>

			<h4>URL: </h4>
			<p><?php echo $cursos2['Excel']['url'] ?></p>
			<br>

			<h4>URL da foto: </h4>
			<p><?php  ?></p>
			<br>
		

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>