<?php

    $sumGrades = 0;
    $highestGrade = 0;
    $bestStudent = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    for($i = 1; $i < 11; $i++) {
        $name = $_POST["name$i"];
        $grade = $_POST["grade$i"];

        $sumGrades += $grade;

        if($grade > $highestGrade) {
            $highestGrade = $grade;
            $bestStudent = $name;
        }
    }

    $rate = $sumGrades / 10;

    echo "<h4>Resultado</h4>";
    echo "<p>A média dos alunos é:</p>". $rate;
    echo "<p>O melhor aluno é: " . $bestStudent . " Com a nota " . $highestGrade . "</p>";
}else{
    echo "<h2>Cadastrar Aluno</h2>";
    echo "<form method='POST'>";

    for($i = 1; $i < 11; $i++) {
        echo "<h3>Aluno $i</h3>";
        echo "Nome: <input type='text' name='name$i' required><br>";
        echo "Nota: <input type='text' name='grade$i' step='0.1' required><br>";
    }

    echo "<input type='submit' value='Calcular'>";
    echo "</form>";
}