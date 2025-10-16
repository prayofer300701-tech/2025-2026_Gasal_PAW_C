<?php

// contoh 1: tanpa callback -> hapus nilai "falsy" (false, 0, "", null)
$data = [0, 1, "", "Apple", false, "Banana", null];
$clean = array_filter($data);
echo "array_filter (remove falsy): " . implode(", ", $clean) . "<br>";

// contoh 2: gunakan callback untuk menyaring nilai (numeric > 10)
$nums = [5, 12, 7, 20, 3];
$gt10 = array_filter($nums, function($v) {
    return $v > 10;
});
echo "Numbers > 10: " . implode(", ", $gt10) . "<br>";

// contoh 3: array asosiatif -> saring berdasarkan nilai
$people = ["Andy" => 176, "Barry" => 165, "Charlie" => 170, "David" => 180];
$tall = array_filter($people, function($height) {
    return $height >= 170;
});
echo "Tall people (>=170): ";
foreach ($tall as $name => $h) { echo "$name=>$h; "; }
echo "<br>";

// contoh 4: saring berdasarkan key (gunakan flag ARRAY_FILTER_USE_KEY)
$settings = ["debug" => true, "cache" => false, "devMode" => true, "prod" => false];
$onlyDevKeys = array_filter($settings, function($k) {
    return stripos($k, 'dev') !== false;
}, ARRAY_FILTER_USE_KEY);
echo "Keys containing 'dev': ";
foreach ($onlyDevKeys as $k => $v) { echo "$k=>".($v ? "true":"false")."; "; }
echo "<br>";
?>