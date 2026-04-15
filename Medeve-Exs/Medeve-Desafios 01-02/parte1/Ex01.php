<?php

    //Exercicio 1
    $nome_alunos = ["Regina", "Rafael Melo", "Rafael Viana", "Murilo Targa", "Antonio Neto"];

    echo $nome_alunos[0] . "<br>";
    echo $nome_alunos[4] . "<br>";


    //Exercicio2
    $produto = [
        "nome" => "Salgado super faturado da cantina da etec",
        "preco" => 11,
        "quantiade" => 4

    ];

    echo "Nome do produto: " . $produto["nome"] . "<br>";
    echo "Preço do produto: " . $produto["preco"] . "<br>";

    //exercicio 3

    $clientes = [
        [
            "id" => 1,
            "nome" => "França",
            "saldo" => 195
        ],
        [
            "id" => 2,
            "nome" => "Rivaldo",
            "saldo" => -204
        ],
        [
            "id" => 3,
            "nome" => "irmão do Jorel",
            "saldo" => 210
        ]
    ];

?>