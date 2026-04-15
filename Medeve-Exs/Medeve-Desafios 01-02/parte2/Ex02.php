<?php

    //EXERCICIO 1
    $cidades = ["São Paulo", "Marilia", "Garça", "Bauru", "Salvador"];

    foreach ($cidades as $cidade) {
        echo $cidade . "<br>";
    }

    //EXERCICIO 2
    $pessoas = [
        [
            "nome" => "João",
            "idade" => 20,
            "curso" => "Informática"
        ],
        [
            "nome" => "antonio",
            "idade" => 16,
            "curso" => "DS"
        ]
    ];
    foreach($pessoas as $pessoa){
        echo $pessoa["nome"]."<br>";
        echo $pessoa["idade"]."<br>";
        echo $pessoa["curso"]."<br>";
        echo "<hr>";
    }

    //EXECICIO 3
    echo "<br><br>";

    $produtos =[
        [
            "nome" => "Pepino",
            "preco" => 15
        ],
        [
            "nome" => "Tomate",
            "preco" => 14
        ]
    ];
    foreach($produtos as $prod){
        echo $prod["nome"]."<br>";
        echo $prod["preco"]."<br>";
        echo "<hr>";
    }
?>