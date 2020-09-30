<!DOCTYPE html>
<html lang="pt-BR">

	<head>

		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CEV - PHP OO | Aula 02</title>

	</head>

	<body>

		<pre>

		<?php
		require_once "Caneta.php";

		//$c1 = new Caneta();
		$c1 = new Caneta("Compactor", "Vermelha", 0.5);
		//$c1->setModelo("Compactor");
		//$c1->setModelo("BIC");
		//$c1->setCor("Azul");
		//$c1->setPonta(0.5);
		$c1->setCarga(50);
		//$c1->setTampada(true);
		//$c1->setCor("Verde");

		$c1->destampar();
		//$c1->tampar();
		print_r($c1->rabiscar());
		$c1->status();
		//print_r($c1);
		?>

		</pre>

	</body>

</html>