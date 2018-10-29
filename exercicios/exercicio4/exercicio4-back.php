<?php
$linhas = $_POST['linhas'];
echo $linhas; 
?>

<table border="1">
<?php	
	for($i = 0; $i < $linhas; $i++){
?>		
	<tr>
		<td>linha <?=$i?></td>
	</tr>
<?php
	}
?>
</table>

<table border="1">
<?php	
	for($i = 0; $i < $linhas; $i++){
		echo '<tr><td>linha '.($i+1).'</td></tr>';
	}
?>
</table>