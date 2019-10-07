<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag11.php" method="POST">
	<h1 style="text-align: center;">Pergunta 9:</h1>
	
	<div style="width: 100%; text-align: center;">
	<img src="img/10.png" width="100%">
	</div>

	<div style="text-align: center;">
	<h2>Mataria seu amigo para adquir poder?</h2>
	</div>

	<div style="text-align: center;">
	<input type="radio" name="resp9" value="5" checked>Sim, claro<br>
	<input type="radio" name="resp9" value="10">lógico que não, que ridículo<br>
	<input type="radio" name="resp9" value="3">Não, mas poderia<br><br><br>
	<?php
		$pontos = $_POST["resp1234567"] + $_POST["resp8"];
		echo "<input type='hidden' name='resp12345678' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>