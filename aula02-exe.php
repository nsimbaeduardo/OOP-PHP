<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio da aula 02</title>
</head>
<body>
    <?php
        require_once 'Carro.php'; 
        $c = new Carro; 

        $c->marca = "Lamborghini hurraco"; 
        $c->ano = 2019; 
        $c->velocidade = 100; 
        
        $c->verificar(); 
        echo "<br>";

        $c2 = new Carro; 

        $c2->marca= "Mercedes benz";
        $c2->ano = 2020; 
        $c2->velocidade = 150; 

        $c2->verificar(); 

    ?>
</body>
</html>