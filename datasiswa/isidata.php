<?php

// cek apakah form nya disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $alamat = $_POST["alamat"];

    $arraydata = [
        "nama" => $nama,
        "kelas" => $kelas,
        "alamat" => $alamat
    ];

    // Menampilkan data dari array
    echo "<h1> Data Siswa </h1>";
    echo "Nama Siswa :" . $arraydata["nama"] . "<br>";
    echo "Kelas Siswa :" . $arraydata["kelas"] . "<br>";
    echo "Alamat Siswa :" . $arraydata["alamat"] . "<br>";
}
?>