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

?>

<!DOCTYPE html>
<html>
<head>
    <title>teamA</title>
    <title>teamB</title>
</head>
<body>
    <h2>Daftar Pemain</h2>
    <h1>Team A</h1>
    ["name" => "Andre", "power" => 80],
    ["name" => "Berli", "power" => 75],
    ["name" => "Charlie", "power" => 88],
    ["name" => "Erina", "power" => 95],
    ["name" => "Desmond", "power" => 88],
    <h1>Team B</h1>
    ["name" => "Farah", "power" => 75],
    ["name" => "Gerry", "power" => 89],
    ["name" => "Hesti", "power" => 76],
    ["name" => "Indra", "power" => 61],
    ["name" => "Jordan", "power" => 96],
    
    <ul>
        <?php foreach ($tema as $power => $power) : ?>
            <li><?php echo $kode . " - " . $item['nama pemian'] . $item['power'] . 
            ", Pemain tersedia: " . $item['tersedia'] . ")"; ?></li>
        <?php endforeach; ?>
        </ul>
    </form>
</body>
</html>