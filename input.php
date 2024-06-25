<?php
    $conn = mysqli_connect ("localhost", "root", "", "service kendaraan bermotor");

    if (isset($_POST["tambah"])) {
        $nama = $_POST["nama"];
        $service = $_POST["service"];
        $tgl = $_POST["tgl"];
        $motor = $_POST["motor"];

        $query = "INSERT INTO bengkel212
                    VALUES
                    ('', '$nama', '$service', '$tgl', '$motor')
                    ";
        mysqli_query($conn, $query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba input</title>
</head>
<body>
    <form action="" method="POST">
    <label for="judul">Input Pelanggal Bengkel</label>
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="nama" name="nama" id="nama">
            </li>
            <li>
                <label for="service">Jenis Service : </label>
                <input type="service" name="service" id="service">
            </li>
            <li>
                <label for="tgl">Tanggal Service : </label>
                <input type="tgl" name="tgl" id="tgl">
            </li>
            <li>
                <label for="motor">Jenis Motor : </label>
                <input type="motor" name="motor" id="motor">
            </li>
            <br>
            <button type="tambah" name="tambah">Tambah</button>
            <button type="muncul" name="muncul">Munculkan Data</button>
        </ul>
    </form>
</body>
</html>