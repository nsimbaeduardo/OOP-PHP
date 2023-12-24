<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - relacionamento de classes</title>
</head>
<body>
    <?php 
    require_once'../aula07/Lutador.php';
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1); 

        $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3); 
        $l[2] = new Lutador("Nsimba", "Angola", 20, 1.70, 53.5, 18, 3, 5); 
        $l[3] = new Lutador("Fernando Adelino", "Congo", 21, 1.60, 60.5, 17, 2, 4); 
        $l[4] = new Lutador("António", "Portugal", 55, 1.80, 120.5, 20, 4, 5); 
        $l[5] = new Lutador("Bernardo", "São Tomé", 26, 2.00, 100.4, 30, 5, 6); 
        
        $l[2]->perderLuta();
        $l[2]->ganharLuta();
        $l[2]->ganharLuta();
        $l[2]->apresentar();
        
    ?>  
</body>
</html>