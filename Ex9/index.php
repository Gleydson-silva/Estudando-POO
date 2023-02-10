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
        
        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";

        $v[0] = new Video("Aula 1 POO");
        $v[1] = new Video("Aula 12 PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        $v[3] = new Video("Aula 7 de Java");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[1], $v[2]);

        $vis[0] -> curtir();
        $vis[1] -> curtir();


        $vis[1] -> avaliarNota(10);
        $vis[0] -> avaliarNota(10);


        print_r($vis);

        ?>
    </pre>
</body>
</html>