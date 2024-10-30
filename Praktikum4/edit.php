<?php
session_start(); 

if (!isset($_SESSION['barang'])) {
    $_SESSION['barang'] = [
        ["id" => 1, "nama" => "Buku", "kategori" => "Alat Tulis", "Harga" => "Rp. 20.000", "penjual" => "Toko A"],
        ["id" => 2, "nama" => "Pulpen", "kategori" => "Alat Tulis", "Harga" => "Rp. 5.000", "penjual" => "Toko B"],
    ];
}

$barang = $_SESSION['barang']; 
$editIndex = -1; 



if (isset($_POST['create'])) {
    
    $id = count($barang) + 1;
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $Harga = $_POST['Harga'];
    $barang[] = ["id" => $id, "nama" => $nama, "kategori" => $kategori, "Harga" => $Harga, "penjual" => $_POST['penjual']];
    $_SESSION['barang'] = $barang; 
}

if (isset($_POST['delete'])) {
    
    $index = $_POST['delete'];
    unset($barang[$index]);
    $barang = array_values($barang); 
    $_SESSION['barang'] = $barang; 
}

if (isset($_POST['edit'])) {
    
    $editIndex = $_POST['edit'];
    $nama = $barang[$editIndex]['nama'];
    $kategori = $barang[$editIndex]['kategori'];
    $Harga = $barang[$editIndex]['Harga'];
    $Penjual = $barang[$editIndex]['penjual'];
}

if (isset($_POST['update'])) {
    
    $index = $_POST['index'];
    $barang[$index]['nama'] = $_POST['nama'];
    $barang[$index]['kategori'] = $_POST['kategori'];
    $barang[$index]['Harga'] = $_POST['Harga'];
    $barang[$index]['penjual'] = $_POST['penjual'];
    $editIndex = -1; 
    $_SESSION['barang'] = $barang; 
}
?>

<form action="" method="POST">
    <label for="nama">Nama Barang:</label>
    <input type="text" id="nama" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>" required><br>

    <label for="kategori">Kategori Barang:</label>
    <input type="text" id="kategori" name="kategori" value="<?php echo isset($kategori) ? $kategori : ''; ?>" required><br>

    <label for="Harga">Harga Barang:</label>
    <input type="text" id="Harga" name="Harga" value="<?php echo isset($Harga) ? $Harga : ''; ?>" required><br>

    <label for="penjual">Penjual Barang:</label>
    <input type="text" id="penjual" name="penjual" value="<?php echo isset($penjual) ? $penjual : ''; ?>" required><br>

    <?php if ($editIndex === -1): ?>
        <input type="submit" name="create" value="Tambah Barang">
    <?php else: ?>
        <input type="hidden" name="index" value="<?php echo $editIndex; ?>">
        <input type="submit" name="update" value="Simpan Perubahan">
    <?php endif; ?>
</form>

<?php

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama Barang</th><th>Kategori</th><th>Harga</th><th>Penjual</th><th>Aksi</th></tr>";
foreach ($barang as $index => $b) {
    echo "<tr>";
    echo "<td>{$b['id']}</td>";
    echo "<td>{$b['nama']}</td>";
    echo "<td>{$b['kategori']}</td>";
    echo "<td>{$b['Harga']}</td>";
    echo "<td>{$b['penjual']}</td>";
    echo "<td>";
    echo "<form method='POST' style='display:inline-block'>";
    echo "<input type='hidden' name='edit' value='{$index}'>";
    echo "<input type='submit' value='Edit'>";
    echo "</form>";
    echo " ";
    echo "<form method='POST' style='display:inline-block'>";
    echo "<input type='hidden' name='delete' value='{$index}'>";
    echo "<input type='submit' value='Hapus'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>