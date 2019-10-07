<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag8.php" method="POST">
	<h1 style="text-align: center;">Pergunta 6:</h1>
	
	<div style="width: 100%; text-align: center;">
	<img src="img/7.jpg" width="100%">
	</div>

	<div style="text-align: center;">
	<h2>Se pudesse viajar no tempo o que você faria:</h2>
	</div>

	<div style="text-align: center;">
	<input type="radio" name="resp6" value="5" checked>Concertaria uma decisão errônia.<br>
	<input type="radio" name="resp6" value="3">Iria para o futuro para fazer uma visita.<br>
	<input type="radio" name="resp6" value="10">Ficaria no presente mesmo.<br><br><br>
	<?php
		$pontos = $_POST["resp1234"] + $_POST["resp5"];
		echo "<input type='hidden' name'resp12345' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html> 