<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag10.php" method="POST">
	<h1 style="text-align: center;">Pergunta 8:</h1>
	
	<div style="width: 100%; text-align: center;">
	<img src="img/9.jpg" width="100%">
	</div>

	<div style="text-align: center;">
	<h2>Qual Habilidade visual gostaria de ter?</h2>
	</div>

	<div style="text-align: center;">
	<input type="radio" name="resp8" value="10" checked>Rinnegan<br>
	<input type="radio" name="resp8" value="5">Sharingan<br>
	<input type="radio" name="resp8" value="3">Byakugan<br><br><br>
	<?php
		$pontos = $_POST["resp123456"] + $_POST["resp7"];
		echo "<input type='hidden' name='resp1234567' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>