<?php

//DESAFIO 1
$usuarios = [
    [
        "nome" => "França",
        "perfil" => "admin"
    ],
    [
        "nome" => "Heber",
        "perfil" => "user"
    ],
    [
        "nome" => "Heitor",
        "perfil" => "user"
    ]
];

foreach($usuarios as $user){
    echo $user["nome"]."<br>";
    echo $user["perfil"]."<br>";
    echo "<hr>";
}

//DESAFIO 2
$contas = [
    [
        "id" => 0,
        "nome" => "Daniel duarte",
        "descricao" => "me pagar por mudar as mesas",
        "tipo" => "receber",
        "valor" => 11.00
    ],
    [
        "id" => 1,
        "nome" => "Murilo Targa",
        "descricao" => "Coca-cola",
        "tipo" => "pagar",
        "valor" => 8.50
    ],
    [
        "id" => 2,
        "nome" => "Kuty",
        "descricao" => "Roupa de fury",
        "tipo" => "receber",
        "valor" => 20.00
    ],
    [
        "id" => 3,
        "nome" => "Samantha",
        "descricao" => "Pão de queijo",
        "tipo" => "receber",
        "valor" => 8.00
    ],
    [
        "id" => 4,
        "nome" => "Marcelo",
        "descricao" => "MecDonalds",
        "tipo" => "receber",
        "valor" => 200.00
    ],
    [
        "id" => 5,
        "nome" => "França",
        "descricao" => "Jogo na Steam",
        "tipo" => "receber",
        "valor" => 1.00
    ],
    [
        "id" => 6,
        "nome" => "Dorival",
        "descricao" => "placa de video",
        "tipo" => "receber",
        "valor" => 450.00
    ],
    [
        "id" => 7,
        "nome" => "Gustavo",
        "descricao" => "gabinete",
        "tipo" => "pagar",
        "valor" => 150.00
    ],
    [
        "id" => 8,
        "nome" => "Regina",
        "descricao" => "Carinho no gato",
        "tipo" => "pagar",
        "valor" => 1.55
    ],
    [
        "id" => 9,
        "nome" => "Claudião",
        "descricao" => "treino",
        "tipo" => "pagar",
        "valor" => 3.60
    ],

];

foreach($contas as $cont){
    if($cont["tipo"] == "receber"){
        echo $cont["nome"]."<br>";
        echo $cont["valor"]."<br>";
        echo $cont["tipo"]."<br>";
        echo "<hr>";
    }
}

?>