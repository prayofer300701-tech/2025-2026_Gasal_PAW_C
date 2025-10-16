<?php

// implementasi berbagai fungsi sorting pada array
function printArr($arr, $label = "") {
    if ($label !== "") echo $label . "<br>";
    foreach ($arr as $k => $v) {
        // tampilkan key=>value untuk associatif, value saja untuk numerik
        if (is_string($k)) {
            echo htmlspecialchars($k) . " => " . htmlspecialchars($v) . "<br>";
        } else {
            echo htmlspecialchars($v) . "<br>";
        }
    }
    echo "<br>";
}

// contoh 1: array numerik
$nums = ["10", "2", "30", "4"];
printArr($nums, "Original numeric:");

$a = $nums; sort($a);               // sort ascending, reindex numeric keys
printArr($a, "sort() ascending (reindexed):");

$b = $nums; rsort($b);             // sort descending, reindex numeric keys
printArr($b, "rsort() descending (reindexed):");

$c = $nums; usort($c, function($x, $y) { return (int)$x <=> (int)$y; }); // custom numeric compare
printArr($c, "usort() numeric compare (reindexed):");

// contoh 2: string / natural order
$fruits = ["apple", "Banana", "cherry", "Apple"];
printArr($fruits, "Original strings:");

$d = $fruits; natcasesort($d);     // natural order, case-insensitive, preserves keys
printArr($d, "natcasesort() natural case-insensitive (keys preserved):");

$e = $fruits; usort($e, 'strnatcasecmp'); // natural case-insensitive, reindexed
printArr($e, "usort() with strnatcasecmp (reindexed):");

// contoh 3: array asosiatif
$assoc = ["b" => 3, "a" => 1, "c" => 2];
printArr($assoc, "Original assoc:");

$f = $assoc; asort($f);            // sort by value ascending, preserve keys
printArr($f, "asort() by value ascending (keys preserved):");

$g = $assoc; arsort($g);           // sort by value descending, preserve keys
printArr($g, "arsort() by value descending (keys preserved):");

$h = $assoc; ksort($h);            // sort by key ascending
printArr($h, "ksort() by key ascending:");

$i = $assoc; krsort($i);           // sort by key descending
printArr($i, "krsort() by key descending:");

// contoh 4: custom comparator preserving keys
$j = $assoc; uasort($j, function($x, $y) { return $x <=> $y; }); // user-defined value compare, keys preserved
printArr($j, "uasort() custom value compare (keys preserved):");

$k = $assoc; uksort($k, function($x, $y) { return strcmp($x, $y); }); // user-defined key compare
printArr($k, "uksort() custom key compare:");
?>