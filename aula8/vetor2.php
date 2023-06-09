<h2>Vetor indexado por texto</h2>

<p>
    Os vetores podem usar textos para 
    indexar (identificar) os valores armazenados.
    Exemplo:

    <pre>
          +-----------+
    nome  |Ivan       |
          +-----------+
    nota1 |9          |
          +-----------+
    nota2 |7          |
          +-----------+

    foreach($alunos as $key => $value){
        echo($value);
    };
    
    </pre>
</p>

<?php

$alunos = [
    "nome" => "ivan",
    "nota1" => 9,
    "nota2" => 7
];

$alunos["notatotal"] = $alunos["nota1"] + $alunos["nota2"];

var_dump($alunos);

echo("<p>&nbsp</p><pre>");

foreach($alunos as $key => $value){
    printf("%23s\n", "+-----------+");
    printf("%9s | %9s | \n", $key, $value);
};

?>
</pre>