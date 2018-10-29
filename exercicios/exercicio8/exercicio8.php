<?php
/* 8 - Escreva um programa em php que peça ao usuário, através da tag radio, o time preferido e que
após utilizando o comando switch mostre uma foto do time escolhido. */
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 8</title>
	</head>
	<body>
		<form action="exercicio8.php" method="post">
			Escolha seu time preferido: <br><br>
			<input type="radio" name="time_sel" value="0"> Internacional<br>
			<input type="radio" name="time_sel" value="1"> Grêmio<br>
			<input type="radio" name="time_sel" value="2"> Brasil de Pelotas<br>
			<input type="radio" name="time_sel" value="3"> Guarany<br><br>
			<input type="submit" value="Enviar">
		</form>
		<?php
			if (isset($_POST['time_sel'])){
				$time = $_POST['time_sel'];
				
				switch($time){
					case 0:
			?>
					<img src="inter.png" width="200px">
			<?php
					break;
					case 1:
			?>
					<img src="gremio.png" width="200px">
			<?php
					break;
					case 2:
			?>
					<img src="pelotas.png" width="200px">
			<?php	
					break;
					case 3:
			?>
					<img src="guarany.png" width="200px">
			<?php
					break;
				}
			}
			?>
	</body>
</html>