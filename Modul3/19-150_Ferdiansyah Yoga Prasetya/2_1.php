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
// ...existing code...
?>