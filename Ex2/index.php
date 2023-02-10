<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    
    include_once "Conta.php";

    $c1 = new Conta;
    $c1->setNumConta(222);
    $c1->setDono("João");
    $c1->abrirConta("cc");

    $c1->depositar(120);
    $c1->pagarMensal();
    $c1->sacar(158);
    $c1->pagarMensal();
    $c1->fecharConta();


    print_r($c1);
    
    ?>
    </pre>
  
</body>
</html>