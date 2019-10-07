<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="final.php" method="POST">
	<h1 style="text-align: center;">Pergunta 10:</h1>
	
	<div style="width: 100%; text-align: center;">
	<img src="img/11.jpg" width="100%">
	</div>

	<div style="text-align: center;">
	<h2>Qual vila gostaria de pertencer?</h2>
	</div>

	<div style="text-align: center;">
	<input type="radio" name="resp10" value="10" checked>Aldeia da folha.<br>
	<input type="radio" name="resp10" value="3">Aldeia da Areia.<br>
	<input type="radio" name="resp10" value="5">Aldeia da névoa.<br><br><br>
	<?php
		$pontos = $_POST["resp12345678"] + $_POST["resp9"];
		echo "<input type='hidden' name='resp123456789' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>