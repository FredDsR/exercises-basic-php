<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 7</title>
	</head>
	<body>
		<form method="post" action="exercicio7.php">
		Digite um número:<input type="number" name="numero">
		<input type="submit" value="Enviar">
		</form>
		
		<?php
		if (isset($_POST['numero'])){
			
			$resposta = $_POST['numero'];
			echo gettype($resposta);
			echo '<br>';
			
			$resposta+=1;
			echo gettype($resposta);
			echo '<br>';
			
			$resposta+=1.2;
			echo gettype($resposta);
		}
		?>
	</body>
</html>