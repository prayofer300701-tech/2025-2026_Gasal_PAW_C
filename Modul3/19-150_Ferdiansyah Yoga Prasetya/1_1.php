<?php

$fruits = array("Avocado", "Blueberry", "Cherry", "Durian", "Orange", "Banana", "Grapes", "Apple");

// tampilkan isi array (opsional)
echo "Isi array: " . implode(", ", $fruits) . "<br>";

// cari indeks tertinggi
$indekstertinggi = count($fruits) - 1;

// tampilkan nilai pada indeks tertinggi dan indeksnya
echo 'Nilai dengan indeks tertinggi adalah: ' . $fruits[$indekstertinggi] . '<br>';
echo 'Indeks tertinggi adalah: ' . $indekstertinggi . '<br>';

?>
