<?php
/* 9 – Escreva um programa em php que peça ao usuário as seguintes informações: Nome, Endereço,
E-mail e o nome de 10 amigos. Crie um array com estes dados e depois imprima na tela o conteúdo
do array. */
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Exercicio 9</title>
		<style>
		.title{
			font-size:20px;
		}
		</style>
	</head>
	<body >
		<form action="exercicio9.php" method="post" style="float:left; margin:20px;">
			Digite seu nome: <input type="text" name="dados_digitados[]" placeholder="Digite aqui" required><br>
			Digite seu edereço: <input type="text" name="dados_digitados[]" placeholder="Digite aqui" required><br>
			Digite seu e-mail: <input type="text" name="dados_digitados[]" placeholder="Digite aqui" required><br>
			<?php
			for($cont = 0; $cont < 10; $cont++){
				echo 'Digite o nome de um amigo: <input type="text" 
														name="dados_digitados[]" 
														placeholder="Digite aqui" 
														required><br>';
			}
			?>
			<input type="submit" value="Enviar">
		</form>
		
		<?php
		//Recolhendo os dados
		if (isset($_POST['dados_digitados'])){
						
			$dados = $_POST['dados_digitados'];
			//dividindo vetor
			for($cont = 0; $cont < 3; $cont++){$dados_pessoais[$cont] = $dados[$cont];}
			for($cont = 0; $cont < 10; $cont++){$dados_amigos[$cont] = $dados[$cont+3];}
		?>
			<table border="1" style="text-align:center; width:400px; float:rigth; margin:20px;">
			<tr>
			<td class="title">Dados</td>
			<td class="title">Amigos</td>
			</tr>
								
			<?php			
			//Aqui insere os dados na tabela
			for($cont = 0; $cont < count($dados_amigos) ; $cont++){	
				if($cont < count($dados_pessoais)){
					echo '<tr><td>'.$dados_pessoais[$cont].'</td><td>'.$dados_amigos[$cont].'</td></tr>';
				}else{
					echo '<tr><td></td><td>'.$dados_amigos[$cont].'</td></tr>';
				}							
			}
			?>
			</table> 
		<?php		
		}
		?>	
	</body>
</html>