<?php

// contoh 1: array numerik, cari nilai -> mengembalikan indeks (atau false jika tidak ditemukan)
$fruits = array("Avocado", "Blueberry", "Cherry", "Durian", "Fig");
$idx = array_search("Cherry", $fruits);
if ($idx !== false) {
    echo "Found 'Cherry' at index: $idx<br>";
} else {
    echo "'Cherry' not found<br>";
}

// contoh 2: array asosiatif, array_search mengembalikan kunci (key) dari nilai yang dicari
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
$key = array_search("170", $height);
if ($key !== false) {
    echo "Found value '170' with key: $key<br>";
} else {
    echo "Value '170' not found<br>";
}

// contoh 3: penggunaan strict untuk membedakan tipe
$nums = array("1", "2", "3"); // semua string
$nonStrict = array_search(1, $nums);           // non-strict: akan menemukan index 0
$strict = array_search(1, $nums, true);       // strict: tidak ditemukan karena tipe berbeda

echo "array_search non-strict(1) => ";
var_export($nonStrict);
echo "<br>";

echo "array_search strict(1) => ";
var_export($strict);
echo "<br>";

// contoh 4: pengecekan yang benar (gunakan !== false) agar indeks 0 tidak terdeteksi sebagai "false"
$result = array_search("Avocado", $fruits);
if ($result !== false) {
    echo "'Avocado' ditemukan pada indeks $result<br>";
} else {
    echo "'Avocado' tidak ditemukan<br>";
}
?>