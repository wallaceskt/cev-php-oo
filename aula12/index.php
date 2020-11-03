<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEV - Aula 12</title>
</head>
<body>

    <h1>CEV - Aula 12</h1>

    <pre>

    <?php
    require_once('Mamifero.php');
    require_once('Canguru.php');
    require_once('Cachorro.php');
    require_once('Reptil.php');
    require_once('Cobra.php');
    require_once('Tartaruga.php');
    require_once('Peixe.php');
    require_once('Goldfish.php');
    require_once('Ave.php');
    require_once('Arara.php');

    $a1 = new Mamifero(10, 2, 4, "preta");
    print_r($a1);
    $a1->locomover();
    $a1->alimentar();
    $a1->emitirSom();
    print_r($a1);

    echo "<hr>";

    $c1 = new Canguru(32.5, 5, 4, "marrom");
    print_r($c1);
    $c1->locomover();
    $c1->alimentar();
    $c1->emitirSom();
    print_r($c1);

    echo "<hr>";

    $c2 = new Cachorro(13.5, 3, 4, "branca");
    print_r($c2);
    $c2->locomover();
    $c2->alimentar();
    $c2->emitirSom();
    $c2->enterrarOsso();
    $c2->abanarRabo();
    print_r($c2);

    echo "<hr>";

    $a2 = new Reptil(.35, 3, 4, "prata");
    print_r($a2);
    $a2->locomover();
    $a2->alimentar();
    $a2->emitirSom();
    print_r($a2);

    echo "<hr>";

    $cobra = new Cobra(.35, 3, 4, "prata");
    print_r($cobra);
    $cobra->locomover();
    $cobra->alimentar();
    $cobra->emitirSom();
    print_r($cobra);

    echo "<hr>";

    $tartaruga = new Tartaruga(8.6, 23, 4, "cinza");
    print_r($tartaruga);
    $tartaruga->locomover();
    $tartaruga->alimentar();
    $tartaruga->emitirSom();
    print_r($tartaruga);

    echo "<hr>";

    $a3 = new Peixe(0.39, 1, 0, "vermelha");
    print_r($a3);
    $a3->locomover();
    $a3->alimentar();
    $a3->emitirSom();
    $a3->soltarBolha();
    print_r($a3);

    echo "<hr>";

    $goldfish = new Goldfish(0.36, 1, 0, "dourada");
    print_r($goldfish);
    $goldfish->locomover();
    $goldfish->alimentar();
    $goldfish->emitirSom();
    $goldfish->soltarBolha();
    print_r($goldfish);

    echo "<hr>";

    $a4 = new Ave(0.89, 2, 2, "verde e azul");
    print_r($a4);
    $a4->locomover();
    $a4->alimentar();
    $a4->emitirSom();
    $a4->fazerNinho();
    print_r($a4);

    echo "<hr>";

    $arara = new Arara(0.78, 2, 2, "verde, amarela e azul");
    print_r($arara);
    $arara->locomover();
    $arara->alimentar();
    $arara->emitirSom();
    $arara->fazerNinho();
    print_r($arara);

    echo "<hr>";
    ?>

    </pre>
    
</body>
</html>