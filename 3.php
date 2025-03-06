<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numbers = [];
    $multiplication = null;
    $result = [];

    for ($i = 1; $i < 11; $i++) {
        $numbers[] = (int)$_POST["number$i"];
    }

    if (isset($_POST["mult"])) {
        $multiplication = (int)$_POST["mult"];
    }

    if (!empty($numbers) && $multiplication !== null) {
        foreach ($numbers as $value) {
            $result[] = $value * $multiplication;
        }

        echo "<h2>Resultados da Multiplicação:</h2>";
        echo "Vetor original: [" . implode(", ", $numbers) . "]<br>";
        echo "Multiplicador: " . $multiplication . "<br>";
        echo "Vetor resultante: [" . implode(", ", $result) . "]<br>";
    } else {
        echo "<h2>Erro: Números ou multiplicador não fornecidos.</h2>";
    }
} else {
    echo "<h2>Digite Números</h2>";
    echo "<form method='POST'>";
    for ($i = 1; $i < 11; $i++) {
        echo "<h3>Campo $i</h3>";
        echo "Número: <input type='number' name='number$i' required><br>";
    }

    echo "<br>Multiplicador: <input type='number' name='mult' id='multiplication' required><br>";

    echo "<input type='submit' value='Calcular'>";
    echo "</form>";
}