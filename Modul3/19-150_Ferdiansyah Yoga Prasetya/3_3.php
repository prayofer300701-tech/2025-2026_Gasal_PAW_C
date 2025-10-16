<?php

// ...existing code...
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

// tambah 5 data baru
$height["David"]   = "180";
$height["Eve"]     = "162";
$height["Fiona"]   = "168";
$height["George"]  = "175";
$height["Helen"]   = "169";

echo "Tinggi Andy adalah " . $height['Andy'] . " cm ." . "<br>";

// hapus data tertentu (mis. "Eve")
if (isset($height['Eve'])) {
    unset($height['Eve']);
}

// ambil kunci terakhir dan tampilkan nilainya (PHP 7.3+)
$lastKey = array_key_last($height);
if ($lastKey !== null) {
    echo "Nilai dengan indeks terakhir (" . $lastKey . ") adalah: " . $height[$lastKey] . " cm." . "<br>";
} else {
    echo "Array height kosong." . "<br>";
}

// --- tambahan: buat array $weight dan tampilkan data ke-2 ---
$weight = array("60kg", "65kg", "70kg");
// data ke-2 berada pada indeks 1 (karena indeks dimulai dari 0)
if (isset($weight[1])) {
    echo "Data ke-2 dari array weight adalah: " . $weight[1] . "<br>";
} else {
    echo "Elemen ke-2 tidak tersedia.<br>";
}
// --- akhir tambahan ---

// ...existing code...
?>