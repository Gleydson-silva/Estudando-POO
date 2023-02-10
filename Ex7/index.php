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
        
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";



        $p1 = new Bolsista("Paulo", 10, "Masculino", 111, "Enfermagem");
        $p2 = new Visitante("Pedro", 22, "Masculino");

        $p1 -> pagarMensalidade();
        
        print_r($p1);
        print_r($p2);


        ?>
    </pre>
</body>
</html>