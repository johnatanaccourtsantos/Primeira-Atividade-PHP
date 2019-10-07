<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 - Atividade</title>
	<meta charset="utf-8">
</head>
<body style=" background: url(img2/naruto-2.jpg) no-repeat center fixed; background-size: 100%; color: white; font-family: Comic Sans MS; font-size: 20px;">
	<h1 style="text-align: center;">Resultado:</h1>
	<?php
		$pontos = $_POST["resp123456789"] + $_POST["resp10"];
		
		if ($pontos <= 30) {
			echo "Você é a Sakura, sua personalidade no Naruto Classico era bastante explosiva ela tinha até mesmo um lado mal dentro dela e isso atrapalhava em suas decisões, mas a partir do shippuden ela consegue superar esse lado e consegue pensar melhor e separar as coisas realizando atitudes plenas e boas.";
			echo "<img style='text-align: center;' src='final/sakura.gif' width='60%'>";
		}
		if (($pontos > 30) && ($pontos <= 50)) {
			echo "Você é o Sasuke, Sasuke passou por uma infância muito triste e passou sua vida inteira atrás de vingança de seu irmão, ele não mudou sua personalidade depois que se casou e teve uma filha mas ele se tornou uma boa pessoa e ajuda sua vila.";
			echo "<img style='text-align: center;' src='final/sasuke.gif' width='60%'>";
		}
		if (($pontos > 50) && ($pontos <= 100)) {
			echo "Você é o Naruto, resumindo superação ele era o pior aluno da academia ninja e no fim se tornou o hokage da vila sendo uns dos maiores personagens dessa história.";
			echo "<img style='text-align: center;' src='final/naruto.gif' width='60%'>";
		}
		//até 30 = sakura, até 50 = sasuke, até 100 = naruto
	?>
	
</form>
	
</body>
</html>