<?php

// contoh 1: menggabungkan array numerik
$a = array("Avocado", "Blueberry", "Cherry");
$b = array("Durian", "Elderberry");
$mergedNum = array_merge($a, $b);
echo "Merged numeric: " . implode(", ", $mergedNum) . "<br>";

// contoh 2: menggabungkan array asosiatif (key string)
// jika key sama, nilai dari array terakhir menimpa nilai sebelumnya
$x = array("Andy" => "176", "Barry" => "165");
$y = array("Barry" => "168", "Charlie" => "170");
$mergedAssoc = array_merge($x, $y);
echo "Merged assoc: ";
foreach ($mergedAssoc as $k => $v) {
    echo "$k=>$v; ";
}
echo "<br>";

// contoh 3: numeric keys akan direindex ulang
$num1 = array(0 => "a", 2 => "b");
$num2 = array(1 => "c");
$mergedReindex = array_merge($num1, $num2);
echo "Merged with reindex: " . implode(", ", $mergedReindex) . "<br>";

// contoh 4: menggabungkan banyak array sekaligus
$all = array_merge($a, $b, $mergedReindex);
echo "Merged all count: " . count($all) . "<br>";

// ...existing code...
?>