<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEV - Aula 10</title>
</head>
<body>

    <h1>CEV - Aula 10</h1>

    <pre>

    <?php
    require_once('Pessoa.php');
    require_once('Aluno.php');
    require_once('Professor.php');
    require_once('Funcionario.php');

    $p1 = new Pessoa("Fernanda Karla", 42, "F");
    print_r($p1);
    $p1->fazerAniversario();
    print_r($p1);

    $a1 = new Aluno("Wallace Oliveira", 41, "M", true, "Análise e Desenvolvimento de Sistemas");
    print_r($a1);
    $a1->cancelarMatricula();
    print_r($a1);

    $e1 = new Professor("Xuxa Meneguel", 49, "F", "Educação Física", 1500);
    print_r($e1);
    print_r($e1);
    $e1->receberAumento(500);
    $e1->fazerAniversario();
    print_r($e1);

    $f1 = new Funcionario("Luisa Mel", 35, "F", "Recursos Humanos", true);
    print_r($f1);
    $f1->mudarTrabalho("Financeiro");
    $f1->fazerAniversario();
    print_r($f1);
    ?>

    </pre>
    
</body>
</html>