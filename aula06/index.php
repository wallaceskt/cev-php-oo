<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEV - PHP OO | Aula 06 - Encapsulamento</title>
</head>
<body>

    <pre>

        <h1>Aula 06 - Encapsulamento</h1>

        <?php
        require('ControleRemoto.php');

        $ctl = new ControleRemoto();
        $ctl->ligar();
        $ctl->abrirMenu();
        $ctl->play();
        $ctl->ligarMudo();
        $ctl->ligarMudo();
        $ctl->pause();
        $ctl->play();
        $ctl->maisVolume();
        $ctl->menosVolume();
        $ctl->desligar();
        print_r($ctl);
        ?>

        <hr>

        <?php
        #
        ?>

    </pre>
    
</body>
</html>