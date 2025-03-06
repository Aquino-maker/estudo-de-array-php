<?php

$peoples = [];
$masculino = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    for ($i = 0; $i < 10; $i++) {
        $peoples[] = [
            "nome" => $_POST["name" . ($i + 1)],
            "cidade" => $_POST["city". ($i + 1)],
            "idade" => $_POST["age". ($i + 1)],
            "sexo" => $_POST["gender". ($i + 1)],
        ];
    }
        echo "<h2>Listagem de Nomes e Idades:</h2>";
        foreach ($peoples as $people) {
            echo $people["nome"] . " - " . $people["idade"] . " anos<br>";
        }
        echo "<h2>Nomes de quem Mora em Santos:</h2>";
        foreach ($peoples as $people) {
            if (strtolower($people["cidade"]) == "santos") {
                echo $people["nome"] . "<br>";
            }
        }
        echo "<h2>Nomes de Quem Tem Mais de 18 Anos:</h2>";
        foreach ($peoples as $people) {
            if ($people["idade"] > 18) {
                echo $people["nome"] . "<br>";
            }
        }
        foreach ($peoples as $people) {
            if ($people["sexo"] == "masculino" || $people["sexo"] == "m") {
                $masculino++;
            }
        }
    echo "<h2>Foram registradas: " . $masculino . " Pessoas do sexo masculino</h2>";
}else{
    echo "<h2>Registro</h2>";
    echo "<form method='post'>";
    for ($i = 1; $i < 11; $i++) {
        echo "<h3>Campo $i</h3>";
        echo "Nome: <input type='text' name='name$i' required><br>";
        echo "Cidade: <input type='text' name='city$i' required><br>";
        echo "Idade: <input type='number' name='age$i' required><br>";
        echo "Sexo: <input type='text' name='gender$i' required><br>";
    }
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";
}
