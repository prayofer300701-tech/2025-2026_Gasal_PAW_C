<?php

// contoh 1: array asosiatif -> ambil hanya nilai, buang key
$assoc = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");
echo "Original assoc: ";
foreach ($assoc as $k => $v) { echo "$k=>$v, "; }
echo "<br>";

$vals = array_values($assoc);
echo "array_values(assoc): " . implode(", ", $vals) . "<br>";

// contoh 2: array numerik dengan 'holes' (kunci tidak berurutan)
$num = array(0 => "A", 2 => "B", 5 => "C");
echo "Original numeric (keys => values): ";
foreach ($num as $k => $v) { echo "$k=>$v, "; }
echo "<br>";

$reindexed = array_values($num);
echo "array_values(reindexed): ";
foreach ($reindexed as $k => $v) { echo "$k=>$v, "; }
echo "<br>";

?>