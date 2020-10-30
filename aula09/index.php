<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEV - Aula 09</title>

    <style>
    * {
        color: black;
    }
    </style>
</head>
<body>

    <h1>CEV - Aula 09</h1>

    <pre>

    <?php
    require_once('Pessoa.php');
    require_once('Livro.php');

    $p1 = new Pessoa("Wallace Oliveira", 41, "masculino");

    print_r($p1);

    $p1->fazerAniversario();

    print_r($p1);

    $l1 = new Livro("Entendendo e Dominando o PHP", "Matt Zandstra", 345, $p1);

    print_r($l1);

    $l1->abrir();
    $l1->avancarPag();
    $l1->avancarPag();
    $l1->avancarPag();
    $l1->voltarPag();
    $l1->folhear(30);
    $l1->detalhes();

    ?>

    </pre>
    
</body>
</html>