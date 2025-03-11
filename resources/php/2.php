<?php

$pares = 0;
$impares = 0;
$positivo = 0;
$negativo = 0;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    for($i = 1; $i < 11; $i++){
        $number = $_POST["number$i"];

        if ($number >= 0) {
            $positivo++;
        }else{
            $negativo++;
        }

        if ($number % 2 == 0) {
            $pares++;
        }else{
            $impares++;
        }
    }

    echo "<h4>Resultado</h4>";
    echo "<p>Foram digitados " . $impares . " Números ímpares</p> ";
    echo "<p>Foram digitados " . $pares . " Números pares</p> ";
    echo "<p>Foram digitados " . $positivo . " Números positivos</p> ";
    echo "<p>Foram digitados " . $negativo . " Números negativos</p> ";
}else{
    echo "<h2>Digite Números</h2>";
    echo "<form method='POST'>";
    for($i = 1; $i < 11; $i++) {
        echo "<h3>Campo $i</h3>";
        echo "Número: <input type='number' name='number$i' required><br>";
    }

    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}