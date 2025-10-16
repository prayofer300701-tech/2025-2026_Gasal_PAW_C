<?php

// ...existing code...
$fruits = array("Avocado", "Blueberry", "Cherry");

// tambah 5 data baru menggunakan for
$toAdd = array("Durian", "Elderberry", "Fig", "Grapes", "Honeydew");
for ($i = 0; $i < count($toAdd); $i++) {
    $fruits[] = $toAdd[$i];
}

// hitung panjang array setelah penambahan
$arrlength = count($fruits);

// tampilkan semua data
for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x] . "<br>";
}

// --- tambahan: buat dan tampilkan array $veggies menggunakan FOR ---
$veggies = array("Carrot", "Spinach", "Tomato");
$veggiesLength = count($veggies);
for ($j = 0; $j < $veggiesLength; $j++) {
    echo $veggies[$j] . "<br>";
}
// --- akhir tambahan ---

// ...existing code...
?>