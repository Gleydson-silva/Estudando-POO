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
        
        include_once "Mamifero.php";
        include_once "Reptil.php";
        include_once "Peixe.php";
        include_once "Ave.php";

        $m = new Mamifero();
        $a = new Cachorro();
        $k = new Canguru();

        $m -> setPeso(55.70);
        $m -> setIdade(8);
        $m -> setMembros(4);
        $m -> locomover();
        $m -> alimentar();
        $m -> emitirSom();

        $a -> setPeso(5.70);
        $a -> setIdade(3);
        $a -> setMembros(4);
        $a -> locomover();
        $a -> alimentar();
        $a -> emitirSom();

        $k -> setPeso(3.70);
        $k -> setIdade(5);
        $k -> setMembros(4);
        $k -> locomover();
        $k -> alimentar();
        $k -> emitirSom();
        

        
        
        ?>
    </pre>
</body>
</html>