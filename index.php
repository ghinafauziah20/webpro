<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petarung</title>
</head>
<body>
    <h1>Daftar Petarung Tim A dan Tim B</h1>

    <?php
    // Data tim petarung
    $timA = [
        ["name" => "Andre", "power" => 80],
        ["name" => "Berli", "power" => 75],
        ["name" => "Charlie", "power" => 67],
        ["name" => "Desmond", "power" => 88],
        ["name" => "Erina", "power" => 95],
    ];

    $timB = [
        ["name" => "Farah", "power" => 75],
        ["name" => "Gerry", "power" => 89],
        ["name" => "Hesti", "power" => 76],
        ["name" => "Indra", "power" => 61],
        ["name" => "Jordan", "power" => 96],
    ];

    // Menampilkan daftar petarung
    echo "<h2>Tim A</h2><ul>";
    foreach ($timA as $index => $petarung) {
        echo "<li>Petarung ".($index+1).": {$petarung['name']} (Power: {$petarung['power']})</li>";
    }
    echo "</ul>";

    echo "<h2>Tim B</h2><ul>";
    foreach ($timB as $index => $petarung) {
        echo "<li>Petarung ".($index+1).": {$petarung['name']} (Power: {$petarung['power']})</li>";
    }
    echo "</ul>";
    ?>

    <h3>Pilih Petarung untuk Duel</h3>
    <form action="duel.php" method="POST">
        <label for="fighterA">Petarung dari Tim A (1-5):</label>
        <input type="number" id="fighterA" name="fighterA" min="1" max="5" required><br><br>

        <label for="fighterB">Petarung dari Tim B (1-5):</label>
        <input type="number" id="fighterB" name="fighterB" min="1" max="5" required><br><br>

        <button type="submit">Duel</button>
    </form>
</body>
</html>