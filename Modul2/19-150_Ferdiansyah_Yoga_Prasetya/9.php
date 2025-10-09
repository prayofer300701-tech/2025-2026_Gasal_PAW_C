<?php

$score = null;
$grade = null;
$message = null;

if (isset($_GET['score'])) {
    
    $score = $_GET['score'];
    if (!is_numeric($score)) {
        $message = "Masukkan nilai numerik (contoh: 75).";
    } else {
        $score = (int) $score;
        if ($score < 0 || $score > 100) {
            $message = "Nilai harus antara 0 dan 100.";
        } else {
            // Determine grade
            if ($score >= 85) {
                $grade = 'A';
            } elseif ($score >= 70) {
                $grade = 'B';
            } elseif ($score >= 60) {
                $grade = 'C';
            } elseif ($score >= 50) {
                $grade = 'D';
            } else {
                $grade = 'E';
            }
            $message = "Nilai: $score => Grade: $grade";
        }
    }
}
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="get">
        <label>Masukkan nilai (0-100): <input type="text" name="score" value="<?php echo htmlspecialchars($score ?? ''); ?>"></label>
        <button type="submit">Hitung</button>
    </form>

    <?php if ($message): ?>
        <p><strong><?php echo htmlspecialchars($message); ?></strong></p>
    <?php endif; ?>

    <hr>

</body>
</html>
