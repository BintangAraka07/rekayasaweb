<?php
// Koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "json"); // password kosong jika default XAMPP

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil semua data dari tabel wisata
$sql = "SELECT * FROM wisata";
$result = mysqli_query($connect, $sql);

// Simpan hasil query ke array
$json_array = array();
while($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}

// Tampilkan dalam format JSON
header('Content-Type: application/json');
echo json_encode($json_array, JSON_PRETTY_PRINT);
?>