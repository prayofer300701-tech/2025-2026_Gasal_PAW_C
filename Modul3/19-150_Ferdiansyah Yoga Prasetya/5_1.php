<?php
$students = array(
    array("Alex",    "220401", "0812345678"),
    array("Bianca",  "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
    array("Derek",   "220404", "0812345699"),
    array("Elisa",   "220405", "0812345601"),
    array("Felix",   "220406", "0812345622"),
    array("Gina",    "220407", "0812345633"),
    array("Hector",  "220408", "0812345644"),
);

// gunakan count() agar kode fleksibel jika jumlah baris/kolom berubah
$rows = count($students);
$cols = $rows > 0 ? count($students[0]) : 0;

for ($row = 0; $row < $rows; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < $cols; $col++) {
        echo "<li>" . htmlspecialchars($students[$row][$col]) . "</li>";
    }
    echo "</ul>";
}
// ...existing code...
?>