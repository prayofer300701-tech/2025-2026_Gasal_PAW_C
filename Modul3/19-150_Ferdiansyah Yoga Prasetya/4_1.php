<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

// tambah 5 data baru
$height["David"]   = "180";
$height["Eve"]     = "162";
$height["Fiona"]   = "168";
$height["George"]  = "175";
$height["Helen"]   = "169";

foreach ($height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
// ...existing code...
?>