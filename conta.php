<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta bancária</title>
</head>
<body>
    <pre>
    <?php
    require_once'ContaBancaria.php';
    $p1 = new ContaBanco(); 
    $p2 = new ContaBanco(); 

    $p1->abrirConta("CC"); 
    $p1->setDono("Nsimba"); 
    $p1->setNumConta(10192992);

    $p2->abrirConta("CP"); 
    $p2->setDono("Maria"); 
    $p2->setNumConta(23398432); 

    $p1->depositar(300); 
    $p2->depositar(500); 

    $p1->pagarMensal(); 
    $p2->pagarMensal(); 

    
    $p1->sacar(338);
    $p2->sacar(630);

    $p1->fecharConta(); 
    $p2->fecharConta();
    
    print_r($p1);
    print_r($p2);

    ?>
   </pre>

</body>
</html>