<?php

$value = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    for ($i = 1; $i < 11; $i++) {
        $value[$i] = $_POST['number' . $i];
    }

    for($i = 10; $i >= 1; $i--){
        $inverse[$i] = $value[$i];
    }

    echo "<h3>Resultado</h3>";
    echo "Vetor Normal: [" . implode(", ", $value) . "]<br>";
    echo "Vetor Contrário: [" . implode(", ", $inverse) . "]<br>";
}else{
    echo "<h2>Vetor Invertido</h2>";
    echo "<form method='post'>";
    for ($i = 1; $i < 11; $i++) {
        echo "<h3>Campo $i</h3>";
        echo "Número: <input type='number' name='number$i' required><br>";
    }
    echo "<input type='submit' value='Enviar'>";
}