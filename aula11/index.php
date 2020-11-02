<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEV - Aula 11</title>
</head>
<body>

    <h1>CEV - Aula 11</h1>

    <pre>

    <?php
    require_once('Visitante.php');
    require_once('Aluno.php');
    require_once('Professor.php');
    require_once('Bolsista.php');
    require_once('Tecnico.php');

    $p1 = new Visitante();
    $p1->setNome("Wallace Oliveira");
    $p1->setIdade(41);
    $p1->setSexo("M");
    print_r($p1);
    $p1->fazerAniversario();
    print_r($p1);

    $p2 = new Aluno("Fernanda Karla", 42, "M", 001, "Análise e Desenvolvimento de Sistemas");
    print_r($p2);
    $p2->fazerAniversario();
    $p2->pagarMensalidade();
    $p2->cancelarMatricula();
    print_r($p2);
    
    $p3 = new Professor("Xuxa Meneguel", 49, "F", "Educação Física", 1500);
    print_r($p3);
    $p3->receberAumento(500);
    $p3->fazerAniversario();
    print_r($p3);
    
    $p4 = new Bolsista("Katarina Konow", 27, "F", 002, "Artes", 500);
    print_r($p4);
    $p4->renovarBolsa();
    $p4->pagarMensalidade();
    $p4->fazerAniversario();
    print_r($p4);
    
    $p5 = new Tecnico("Bruna Lucas", 28, "F", 003, "Matemática", "TE12345");
    print_r($p5);
    $p5->pagarMensalidade();
    $p5->praticar();
    $p5->fazerAniversario();
    print_r($p5);
    ?>

    </pre>
    
</body>
</html>