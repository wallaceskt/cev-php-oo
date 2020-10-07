<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEV - PHP OO | Aula 05 - Exercício</title>
</head>
<body>

    <pre>

        <h1>Aula 05 - Exercício</h1>

        <?php
        require('ContaBanco.php');

        $c1 = new ContaBanco(1, "Jubileu");
        $c1->abrirConta("cc");
        $c1->depositar(50);
        $c1->sacar(200);
        $c1->pagarMensalidade();
        print_r($c1);
        ?>

        <hr>

        <?php
        $c2 = new ContaBanco(2, "Creuza");
        $c2->abrirConta("cp");
        $c2->depositar(80);
        $c2->sacar(200);
        $c2->pagarMensalidade();
        print_r($c2);
        ?>

    </pre>
    
</body>
</html>