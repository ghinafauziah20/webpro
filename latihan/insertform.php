<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form academic modul 4</title>
</head>
<body>
    <table>
        <form action="insertdata.php" method="POST">
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="text" id="nim" name="nim" required></td>
            </tr>

            <tr>
                <td><label for="nama_depan">Nama:</label></td>
                <td><input type="text" id="nama_depan" name="nama_depan" required></td>
            </tr>

            <tr>
                <td><label for="kodeprodi">Kode Prodi:</label></td>
                <td><input type="text" id="kodeprodi" name="kodeprodi" required></td>
            </tr>

            <tr>
                <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
                <td>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tambah">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>