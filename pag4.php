<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag5.php" method="POST">
	<h1 style="text-align: center;">Pergunta 3:</h1>
	
	<div style="width: 100%; text-align: center;">	
	<img src="img/4.jpg" width="100%">
	</div>
	
	<div style="text-align: center;">	
	<h2>Como você reage em uma situação difícil?:</h2>
	</div>

	<div style="text-align: center;">	
	<input type="radio" name="resp3" value="3" checked>Sai batendo em todo mundo<br>
	<input type="radio" name="resp3" value="10">Pensa no que vai fazer antes de agir.<br>
	<input type="radio" name="resp3" value="5">Tenta conversar com alguma pessoa sobre o que está acontecendo.<br><br><br>
	<?php
		$pontos = $_POST["resp1"] + $_POST["resp2"];
		echo "<input type='hidden' name='resp12' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>