<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 1</title>
	</head>
	<body>

		<form action="exercicio1.php" method="post">
			Escolha seu sexo:<br>
			<input type="radio" name="sexo" value="M"> Masculino <br> 
			<input type="radio" name="sexo" value="F"> Feminino 
			<input type="submit" value="Enviar">	
		</form>
		<?php
		if (isset($_POST['sexo'])){
			$sexo_selecionado = $_POST['sexo'];
			if($sexo_selecionado == "M"){
			?>
				<img src="ciro_lindo.jpg" width="200px">
			<?php	
			}
			if($sexo_selecionado == "F"){
			?>
				<img src="marina_eh_amor.jpeg" width="200px">
			<?php	
			}
		}
		?>
	</body>
</html>