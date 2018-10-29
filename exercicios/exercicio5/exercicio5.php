<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 5</title>
	</head>
	<body>
		<form method="post" action="exercicio5.php">
		<select  name="selecao">
			<option value="v1">valor 1</option>
			<option value="v2">valor 2</option>
		</select>
		<input type="submit" value="Enviar">
		</form>
		<?php
			if (isset($_POST['selecao'])){
			echo $_POST['selecao'];
			}
		?>
	</body>
</html>