<?php

$mouth = [
    1 => "Janeiro",
    2 => "Fevereiro",
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number_mouth = $_POST["number_mouth"];
    if(isset($mouth[$number_mouth])) {
        echo "O mês corespondente ao número selecionado é: " . $mouth[$number_mouth] . "<br>";
    }else{
        echo "Número do mês não encontrado! ";
    }
}else{
    echo "<h2>Meses do ano</h2>";
    echo "<form method='post'>";
    echo "Número: <input type='number' name='number_mouth' min='1' max='12' required><br>";

    echo "<input type='submit' value='Enviar'>";
}