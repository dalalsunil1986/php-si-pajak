<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "skripsipajak";

//Membuat koneksi baru ke database
$database = new mysqli($servername, $username, $password);

//Mengecek apakah koneksi ke database berhasil
if ($conn->connect_error) {
    die("Koneksi ke database gagal. Cek folder app/database/db.php mungkin anda salah memasukkan username dan password mysql." . $conn->connect_error);
}

?>