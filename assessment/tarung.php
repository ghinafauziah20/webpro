<?php
$teamA = [
    ["name" => "Andre", "power" => 80],
    ["name" => "Berli", "power" => 75],
    ["name" => "Charlie", "power" => 88],
    ["name" => "Erina", "power" => 95],
    ["name" => "Desmond", "power" => 88],
];

$teamB = [
    ["name" => "Farah", "power" => 75],
    ["name" => "Gerry", "power" => 89],
    ["name" => "Hesti", "power" => 76],
    ["name" => "Indra", "power" => 61],
    ["name" => "Jordan", "power" => 96],
];

$teamA = $_POST['teamA'] - 1;
$teamB = $_POST['teamB'] - 1;

$teamA = $teamA[$teamA]["power"];
$powerB = $teamB[$teamB]["power"];
$nameA = $teamA[$teamA]["name"];
$nameB = $teamB[$teamB]["name"];

if ($powerA > $powerB) {
    $winner = $nameA;
    $remainingPower = $powerA - $powerB;
    echo "<h2>Pemenang: $nameA dari Tim A</h2>";
    echo "<p>Sisa kekuatan: $remainingPower</p>";
} elseif ($powerB > $powerA) {
    $winner = $nameB;
    $remainingPower = $powerB - $powerA;
    echo "<h2>Pemenang: $nameB dari Tim B</h2>";
    echo "<p>Sisa kekuatan: $remainingPower</p>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertandingan MMA</title>
</head>
<body>
    <h1>Pertandingan MMA</h1>
    <form action="tarung.php" method="POST">
        <label for="teamA">Pilih petarung dari Tim A (Andre, Berli, Charlie, Erina, Dasmond):
        <input type="number" id="teamA" name="teamA" min="1" max="5" required><br><br>

        <label for="teamB">Pilih petarung dari Tim B (Farah, Gerry, Hesti, Indra, Jordan):
        <input type="number" id="teamB" name="teamB" min="1" max="5" required><br><br>

        <button type="submit">Mulai Pertarungan</button>
    </form>
</body>
</html>
