<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag6.php" method="POST">
	<h1 style="text-align: center;">Pergunta 4:</h1>

	<div style="width: 100%; text-align: center;">	
	<img src="img/5.jpg" width="100%">
	</div>

	<div style="text-align: center;">	
	<h2>Você se irrita facilmente?</h2>
	</div>

	<div style="text-align: center;">	
	<input type="radio" name="resp4" value="10" checked>Sim<br>
	<input type="radio" name="resp4" value="5">Não<br>
	<input type="radio" name="resp4" value="3">Apenas quando é provocado em excesso.<br><br><br>
	<?php
		$pontos = $_POST["resp12"] + $_POST["resp3"];
		echo "<input type='hidden' name='resp123' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>