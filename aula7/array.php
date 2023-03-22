<h2>Array - Vetor</h2>
<p>
    Vetores são estruturas de dados
    unidimensionaus "variáveis compostas", que
    permitem o armazenamento de mais de 1 valor.
    Para acessar os valores armazenados em um Vetor
    é necessário informar o índice (key).
</p>

<strong>Aparência de um Vetor</strong>
<pre>
     +-----------+
    0|maçã       |
     +-----------+
    1|uva        |
     +-----------+
    2|pera       |
     +-----------+
    3|laranja    |
     +-----------+
</pre>
<strong>Como criar um vetor</strong>
<pre>
    //opção 1
    $variavel = ["Maça", "Uva", "Pera", "Laranja"];

    //opção 2
    $variavel = array("Maça", "Uva", "Pera", "Laranja");

    //opção 3
    $variavel = [];
    $variavel[0] = "Maça";
    $variavel[1] = "Uva";
    $variavel[2] = "Pera";
    $variavel[3] = "Laranja";
</pre>
<?php
    $variavel = ["maçã", "uva", "pera", "laranja"];
    var_dump($variavel);

    echo "<p>&nbsp;</p>";
    echo $variavel[0] . "<br>";
    echo $variavel[1] . "<br>";
    echo $variavel[2] . "<br>";
    echo $variavel[3] . "<br>";

    echo "<br>";
    
    for($i = 0; $i < count($variavel); $i++){
        echo $variavel[$i] . "<br>";
    }

    echo("<br>");

    //vetor de notas
    $notas = array(5,6,8);
    //como calcular a média de um vetor?
    $media = ($notas[0] + $notas[1] + $notas[2]) / 3;
    //imprimir a média
    echo $media;
?>