 <!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag4.php" method="POST">
	<h1 style="text-align: center;">Pergunta 2:</h1>
	
	<div >	
	<img style="width: 100%; text-align: center;" src="img/3.jpg">
	</div>
	
	<div style="text-align: center;">	
	<h2>Você se Considera:</h2>
	</div>
	
	<div style="text-align: center;">	
	<input type="radio" name="resp2" value="3" checked>Introvertido<br>
	<input type="radio" name="resp2" value="5">Extrovertido<br>
	<input type="radio" name="resp2" value="10">Meio a meio<br><br><br>	
	<?php
		$pontos = $_POST["resp1"];
		echo "<input type='hidden' name='resp1' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>.
	
</body>
</html>