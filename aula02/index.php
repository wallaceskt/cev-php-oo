<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<meta charset="UTF-8">
		<title>Aula 02 - POO</title>

	</head>

	<body>

		<pre>

		<?php
		require_once "Caneta.php";

		$c1 = new Caneta("BIC", "Azul", 0.5);
		//$c1->setModelo("BIC");
		//$c1->setCor("Azul");
		//$c1->setPonta(0.5);
		$c1->setCarga(0);
		//$c1->setTampada(true);
		//$c1->setCor("Verde");

		$c1->destampar();
		$c1->tampar();
		$c1->rabiscar();
		$c1->status();
		print_r($c1);
		?>

		</pre>

	</body>

</html>