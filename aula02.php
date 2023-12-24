<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 de POO com PHP</title>
</head>
<body>
    <?php
        require_once 'Caneta.php'; 
        $c1 = new Caneta;
        $c1->cor = "azul"; 
        $c1->ponta = 0.5; 
        $c1->tampada= false; 
        $c1->destampar();
        $c1->rabiscar();
        echo "<br/>"; 

        $c2 = new Caneta; 
        $c2->cor = "vermelho"; 
        $c2->carga = 50; 
        $c2->tampar(); 
        $c2->rabiscar(); 
    ?>
</body>
</html>