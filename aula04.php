<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <pre>
    <?php
        require_once'CanetaAula04.php'; 
        $c1 = new Caneta("942","BIC", "Rosa", 0.2, false );  
        $c2= new Caneta("Bravo", "Azul", 0.5, true );

        

        print_r($c1);
        print_r($c2); 
    ?>
    </pre>
</body>
</html>