<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - encapsulamento</title>
</head>
<body> 
    <h1>Projecto controlo remoto</h1>
    <?php
     require_once'../aula06/ControleRemoto.php';
       

        $c = new ControleRemoto(); 
        // $c->ligar(); 
        $c->menosVolume(0);
        $c->abrirMenu();
    ?>
</body>
</html>