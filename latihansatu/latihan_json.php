<?php
// variabel array → encode ke JSON
$hewan = array(
    "kucing" => "Persia",
    "anjing" => "Bulldog",
    "burung" => "Merpati"
);

echo "<h3>1. Encode Array ke JSON</h3>";
$jsonHewan = json_encode($hewan);
echo $jsonHewan;

// variabel JSON → decode ke Object & Array
$json = '{
    "mahasiswa": {
        "nama": "Andi",
        "umur": 22,
        "hobi": ["Membaca", "Coding", "Futsal"]
    }
}';

// Decode ke Object
$obj = json_decode($json);

// Decode ke Array
$arr = json_decode($json, true);

echo "<h3>2. Decode JSON ke Object</h3>";
echo "Nama: " . $obj->mahasiswa->nama . "<br>";
echo "Umur: " . $obj->mahasiswa->umur . "<br>";
echo "Hobi Pertama: " . $obj->mahasiswa->hobi[0] . "<br>";

echo "<h3>3. Decode JSON ke Array</h3>";
echo "Nama: " . $arr["mahasiswa"]["nama"] . "<br>";
echo "Umur: " . $arr["mahasiswa"]["umur"] . "<br>";
echo "Hobi Kedua: " . $arr["mahasiswa"]["hobi"][1] . "<br>";
?>