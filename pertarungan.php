<?php
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

$petarungA = $_POST['fighterA'] - 1;
$petarungB = $_POST['fighterB'] - 1;

if (!isset($timA[$petarungA]) || !isset($timB[$petarungB])) {
    echo "Petarung yang dipilih tidak terdaftar.";
    exit;
}

$petarungA = $timA[$petarungA];
$petarungB = $timB[$petarungB];

echo "<h2>Pertarungan: {$petarungA['name']} vs {$petarungB['name']}</h2>";
if ($petarungA['power'] > $petarungB['power']) {
    $sisaPower = $petarungA['power'] - $petarungB['power'];
    echo "<p>Pemenang: {$petarungA['name']} dari Tim A dengan sisa kekuatan: $sisaPower</p>";
} elseif ($petarungB['power'] > $petarungA['power']) {
    $sisaPower = $petarungB['power'] - $petarungA['power'];
    echo "<p>Pemenang: {$petarungB['name']} dari Tim B dengan sisa kekuatan: $sisaPower</p>";
} else {
    echo "<p>Hasil: Seri! Tidak ada pemenang.</p>";
}
?>