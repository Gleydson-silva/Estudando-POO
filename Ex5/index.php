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
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p[0] = new Pessoa("José", 20, "Masculino");
        $p[1] = new Pessoa("Ana", 30, "Feminino");

        $l[0] = new Livro("PHP", "Paulo", 110, $p[0]);
        $l[1] = new Livro("Javascript", "Lucas", 300, $p[1]);

        $l[0]->folhear(25);
        $l[0]->voltarPag();



        $l[0] -> detalhar();

        
        ?>
    </pre>
</body>
</html>