<?php

// contoh penggunaan array_push()
$fruits = array("Avocado", "Blueberry", "Cherry");

echo "Sebelum: " . implode(", ", $fruits) . "<br>";

// tambahkan 1 elemen, array_push mengembalikan panjang array baru
$newLength = array_push($fruits, "Durian");
echo "Setelah array_push('Durian') (length={$newLength}): " . implode(", ", $fruits) . "<br>";

// tambahkan beberapa elemen sekaligus
$newLength = array_push($fruits, "Elderberry", "Fig");
echo "Setelah menambah 'Elderberry','Fig' (length={$newLength}): " . implode(", ", $fruits) . "<br>";

// alternatif menambahkan elemen dengan operator []
$fruits[] = "Grapes";
echo "Setelah \$fruits[] = 'Grapes': " . implode(", ", $fruits) . "<br>";
?>