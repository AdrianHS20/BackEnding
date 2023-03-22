<?php
    $produto1 = [
        "Nome" => "Camera",
        "Marca" => "LG",
        "Preco" => 3500
    ];

    $produto2 = [
        "Nome" => "Notebook",
        "Marca" => "Dell",
        "Preco" => 7500
    ];

    $produto3 = [
        "Nome" => "SmartPhone",
        "Marca" => "Samsung",
        "Preco" => 3500
    ];

    $produto4 = [
        "Nome" => "Bala",
        "Marca" => "Halls",
        "Preco" => 2
    ];

    $produtos = [$produto1, $produto2, $produto3, $produto4];

    echo json_encode($produtos);
    
    