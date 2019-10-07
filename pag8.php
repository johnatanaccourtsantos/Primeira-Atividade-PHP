 <!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style="background: url(img2/naruto-1.jpg)no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<form action="pag9.php" method="POST">
	<h1 style="text-align: center;">Pergunta 7:</h1>
	
	<div style="width: 100%; text-align: center;">
	<img src="img/8.png" width="100%">
	</div>

	<div style="text-align: center;">
	<h2>Qual clã você escolheria?</h2>
	</div>

	<div style="text-align: center;">
	<input type="radio" name="resp7" value="10" checked>Uzumaki<br>
	<input type="radio" name="resp7" value="5">Uchiha<br>
	<input type="radio" name="resp7" value="3">Haruno<br><br><br>
	<?php
		$pontos = $_POST["resp12345"] + $_POST["resp6"];
		echo "<input type='hidden' name='resp123456' value='$pontos'>";
	?>
	<input type="submit" value="Próxima Pergunta">
	</div>
</form>
	
</body>
</html>