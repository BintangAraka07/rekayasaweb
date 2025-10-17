<?php
// Fungsi untuk mengambil data dari URL
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// Ambil data JSON dari getWisata.php
$send = curl("http://localhost/json/getWisata.php");

// Ubah JSON menjadi array PHP
$data = json_decode($send, TRUE);

// Tampilkan sebagai tabel
echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse:collapse; font-family:Arial'>";
echo "<tr style='background-color:#c1e1ff;'>
        <th>No</th>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

$no = 1;
foreach($data as $row){
    echo "<tr>";
    echo "<td align='center'>".$no++."</td>";
    echo "<td>".$row['kota']."</td>";
    echo "<td>".$row['landmark']."</td>";
    echo "<td>".$row['tarif']."</td>";
    echo "</tr>";
}

echo "</table>";
?>