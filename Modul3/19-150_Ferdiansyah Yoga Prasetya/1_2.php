<?php

$fruits = array("Avocado", "Blueberry", "Cherry", "Durian", "Orange", "Banana", "Grapes", "Apple");

// hapus data tertentu (mis. "Durian")
if (($key = array_search("Durian", $fruits)) !== false) {
    unset($fruits[$key]);
    // reindex agar indeks berurutan 0..n-1
    $fruits = array_values($fruits);
}

// tampilkan isi array (opsional)
echo "Isi array: " . implode(", ", $fruits) . "<br>";

// cari indeks tertinggi dengan pengecekan kosong
if (count($fruits) > 0) {
    $indekstertinggi = count($fruits) - 1;
    // tampilkan nilai pada indeks tertinggi dan indeksnya
    echo 'Nilai dengan indeks tertinggi adalah: ' . $fruits[$indekstertinggi] . '<br>';
    echo 'Indeks tertinggi adalah: ' . $indekstertinggi . '<br>';
} else {
    echo "Array kosong.<br>";
}

?>