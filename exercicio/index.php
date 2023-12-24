<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Um pequeno exercício</title>
</head>
<body>
    <pre>
    <?php
    require_once '../exercicio/Pessoa.php';
    require_once '../exercicio/Livro.php'; 

    $p[0] = new Pessoa("Nsimba", 20, "M"); 
    $p[1] = new Pessoa("João", 25, "M"); 

    $l[0] = new Livro("O anel dourado", "Steven John", 100, $p[0]); 
    
    $l[1] = new Livro("PHP básico", "João Ricardo", 400, $p[1]); 
    $l[2] = new Livro("Java", "Martins", 700, $p[1]); 
    
    $l[0]->abrir();
    $l[0]->folhear(80);
    $l[0] -> detalhes();

    
    $l[1]->abrir();
    $l[1]->folhear(50);
    $l[1]->detalhes();

    // print_r($l[0]);
    ?>
    </pre>
</body>
</html>