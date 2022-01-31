<?php

$carro = 18 ;
require __DIR__ . '/../infra/conexao.php';

        /* $sql =  "SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE s.nome LIKE '%carro%' ";
        var_dump($sql);
        
        $stmt = $pdo->prepare($sql);   

        //$stmt = $pdo->query();
       
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC); */

        
        
        $stmt = $pdo->query("SELECT * FROM produtos s INNER JOIN preco p ON p.produtos_idProd = s.idProd WHERE p.preco = '$carro' ");
        $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($lista);    