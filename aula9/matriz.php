<?php
    $produto1 = [
        "Nome" => "Câmera",
        "Marca" => "LG",
        "Preço" => 3500
    ];

    $produto2 = [
        "Nome" => "Notebook",
        "Marca" => "Dell",
        "Preço" => 7500
    ];

    $produto3 = [
        "Nome" => "SmartPhone",
        "Marca" => "Samsung",
        "Preço" => 3500
    ];

    $produtos = [$produto1, $produto2, $produto3];

    var_dump($produtos);
    
    echo"<p>&nbsp</p>";

    for($i=0;$i<2;$i++){
        foreach($produtos[$i] as $key => $value){
            echo $value. "<br>";
        }
    };

    echo"<p>&nbsp</p>";
    echo "<table border=1>";
    foreach($produtos as $produto){
        echo "<tr>";
        echo "<td>" . $produto["Nome"] . "</td><br>";
        echo "<td>" . $produto["Marca"] . "</td><br>";
        echo "<td>" . $produto["Preço"] . "</td><br>";
        echo "</tr>";
    }
    echo "<table>";