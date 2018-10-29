<?php
		
		if (isset($_POST['idade'])){
			$idade = $_POST['idade'];
			if($idade <= 21){
				$cor = 'red';
				
			}else{
				$cor = "blue";
			}
			
		}
		?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 2</title>
		<?php
			if(isset($cor)){
				echo "<style>.mudacor{ background-color:".$cor.";}</style>";
			}			
		?>
	</head>
	<body class="mudacor">
		<form action="exercicio2.php" method="post">
			Digite sua idade: <input type="number" min="1" name="idade" placeholder="Digite sua idade aqui" required>
			<input type="submit" value="Enviar">
		</form>
	
	</body>
</html>