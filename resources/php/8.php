<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $vehicles = $_POST['veiculo'];

    echo "<h2>Modelos e anos dos Veículos:</h2>";
    foreach ($vehicles as $vehicle) {
        echo "Modelo: " . $vehicle["modelo"] . ", Fabricante: " . $vehicle["fabricante"] . ", Ano: " . $vehicle["ano"] .
            "<br>";
    }

    echo "<h3>Veículos Cor Prata:</h3>";
    foreach ($vehicles as $vehicle) {
        if (strtolower($vehicle["cor"]) == "prata"){
            echo "Modelo: " . $vehicle["modelo"] . ", Fabricante: " . $vehicle["fabricante"] . ", Ano: " .
                $vehicle["ano"] . "<br>";
        }
    }

    echo "<h3>Veículos, cor e quantidade de portas:</h3>";
    foreach ($vehicles as $vehicle) {
        echo "Modelo: " . $vehicle["modelo"] . ", Cor: " . $vehicle["cor"] . ", Quantidade de Portas: " .
            $vehicle["portas"] . "<br>";
    }

    echo "<h3>Veículos da Ford:</h3>";
    foreach ($vehicles as $vehicle) {
        if (strtolower($vehicle["fabricante"]) == "ford"){
            echo "Modelo: " . $vehicle["modelo"] . ", Ano: " . $vehicle["ano"] . "<br>";
        }
    }

    echo "<h3>Veículos a partir de 2013:</h3>";
    foreach ($vehicles as $vehicle) {
        if($vehicle["ano"] >= 2013){
            echo "Modelo: " . $vehicle["modelo"] . ", Ano: " . $vehicle["ano"] . "<br>";
        }
    }
}else{
    echo "<h2>Registro</h2>";
    echo "<form method='post'>";
    for ($i = 1; $i < 11; $i++) {
        echo "<h3>Campo $i</h3>";
        echo "Modelo: <input type='text' name='veiculo[$i][modelo]' required><br><br>";
        echo "Fabricante: <input type='text' name='veiculo[$i][fabricante]' required><br><br>";
        echo "Cor: <input type='text' name='veiculo[$i][cor]' required><br><br>";
        echo "Quantidade de Portas: <input type='number' max='5' name='veiculo[$i][portas]' required><br><br>";
        echo "Ano: <input type='number' name='veiculo[$i][ano]' required><br><br>";
    }
    echo "<input type='submit' value='Enviar'>";
    echo "</form>";
}