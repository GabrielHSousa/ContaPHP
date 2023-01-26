<?php
    require_once('Contas.php');//Conectei as classes
    //Criando a conta
    $conta = new Conta("12345678910 ","Gabriel Henrique ",100000); // Instanciar a contas
    $conta->imprimir();//Utilizando o método imprimir
    echo"<br><br>";
    $saque = new Conta("12345678911 ","João Luiz ",10000); // Instanciar a contas
    $saque->imprimir();//Utilizando o método imprimi
    //Realizando Saque
    $conta->sacar($conta,50000);
    $conta->imprimir();
    //Realizando Depósito
    echo"<br><br>";
    $conta->depositar($conta,100000);
    $conta->imprimir();

    echo"<br><br>";
    $conta ->transferir($saque,$conta,20000);
    $conta->imprimir();
    echo"<br><br>";
    $saque->imprimir();
?>