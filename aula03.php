<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 de POO com PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once 'CanetaAula03.php'; 
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal"; 
            $c1->cor = "castanho"; 
            $c1->rabiscar(); 
            
            $c1->tampar(); 

            print_r($c1); 
        ?>
    </pre>
</body>
</html>