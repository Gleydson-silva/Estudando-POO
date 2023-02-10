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
        
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";

        $p1 = new Aluno("André", 15, "Masculino", "Informatica");
        $p2 = new Professor("Fabiana", 50, "Feminino");
        $p3 = new Funcionario("Alex", 20, "Maculino");


        print_r($p2);



    ?>
    </pre>
</body>
</html>