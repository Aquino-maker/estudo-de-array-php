<?php

$vetor1 = [];
$vetor2 = [];
$result = [];

if($_SERVER["REQUEST_METHOD"] === "POST") {
    for ($i = 0; $i < 10; $i++) {
        $vetor1[$i] = (int)$_POST["vetor1" . ($i + 1)];
        $vetor2[$i] = (int)$_POST["vetor2" . ($i + 1)];
        $result[$i] = $vetor1[$i] * $vetor2[$i];
    }

    echo "<h2>Resultados da Multiplicação:</h2>";
    echo "Vetor A: [" . implode(", ", $vetor1) . "]<br>";
    echo "Vetor B: [" . implode(", ", $vetor2 ) . "]<br>";
    echo "Resultado: [" . implode(", ", $result) . "]<br>";
} else {
    echo "<h2>Digite Números</h2>";
    echo "<form method='POST'>";
    for ($i = 1; $i < 11; $i++) {
        echo "<h3>Campo $i</h3>";
        echo "Vetor 1: <input type='number' name='vetor1$i' required><br>";
        echo "Vetor 2: <input type='number' name='vetor2$i' required><br>";
    }
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";
}
