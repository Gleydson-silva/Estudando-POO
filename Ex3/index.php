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
    
    include_once "Controle.php";

    $c1 = new ControleRemoto;
    $c1->ligar();
    
    $c1->abrirMenu();


    print_r($c1);
    
    ?>
    </pre>
  
</body>
</html>