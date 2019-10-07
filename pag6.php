<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag7.php" method="POST">
	<h1 style="text-align: center;">Pergunta 5:</h1>
	
	<div style="width: 100%; text-align: center;">
	<img src="img/6.jpg" width="100%">
	</div>

	<div style="text-align: center;">
	<h2>Escolha uma das opções?</h2>
	</div>

	<div style="text-align: center;">	
	<input type="radio" name="resp5" value="10" checked>Sentido Auditivo<br>
	<input type="radio" name="resp5" value="5">Sentido Visual<br>
	<input type="radio" name="resp5" value="3">Sentido Tátil<br><br><br>
	<?php
		$pontos = $_POST["resp123"] + $_POST["resp4"];
		echo "<input type='hidden' name='resp1234' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>