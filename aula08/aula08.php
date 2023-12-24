<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 - relacionamento de classes</title>
</head>
<body>
    <?php 
    require_once '../aula08/Lutador.php';
    require_once '../aula08/Luta.php'; 
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1); 
        $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 60.8, 14, 2, 3); 
        $l[2] = new Lutador("Nsimba", "Angola", 20, 1.70, 53.5, 18, 3, 5); 
        $l[3] = new Lutador("Fernando Adelino", "Congo", 21, 1.60, 60.5, 17, 2, 4); 
        $l[4] = new Lutador("António", "Portugal", 55, 1.80, 120.5, 20, 4, 5); 
        $l[5] = new Lutador("Bernardo", "São Tomé", 26, 2.00, 100.4, 30, 5, 6); 
        
        $UEC01 = new Luta(); 
        $UEC01->marcarLuta($l[0], $l[1]); 
        $UEC01->lutar(); 
       
        
    ?>  
</body>
</html>