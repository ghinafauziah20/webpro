<?php
include " dbconfig.php";

$nim = $_POST["nim"];
$nama_depan = $_POST["nama_depan"];
$nama_prodi = $_POST["nama_prodi"];
$jk = $_POST["jk"];

$sqlStatement = "UPDATE students SET
nama_depan='$nama_depan' ,
kode_prodi='$kode_prodi', jenis_kelamin='$jk'
WHERE nim='$nim'";
$quey = mySqli_query($conn, $sql);

mysqli_close($conn);
?>