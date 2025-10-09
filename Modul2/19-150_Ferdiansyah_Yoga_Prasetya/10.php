<?php

$menu = [
    'Nasi Goreng' => 15000,
    'Mie Goreng' => 12000,
    'Ayam Goreng' => 20000,
    'Es Teh' => 5000,
];

$total = isset($_GET['total']) ? (int) $_GET['total'] : 0;
$summary = isset($_GET['summary']) ? $_GET['summary'] : '';
$message = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $item = $_GET['item'] ?? '';
    $qty = isset($_GET['qty']) ? (int) $_GET['qty'] : 0;

    // Validate selection
    if (!array_key_exists($item, $menu) && $action !== 'checkout') {
        $message = 'Pilih menu yang valid.';
    } elseif ($qty <= 0 && $action !== 'checkout') {
        $message = 'Masukkan jumlah (qty) minimal 1.';
    } else {
        if ($action !== 'checkout') {
            $price = $menu[$item];
            $subtotal = $price * $qty;
            $total += $subtotal;
            $summary .= htmlspecialchars("$item x $qty = Rp" . number_format($subtotal, 0, ',', '.') ) . "<br>";
        }

        if ($action === 'checkout') {
            // Finalize
        } else {
            // Add another - continue showing form with updated total and summary
            $message = 'Item berhasil ditambahkan ke keranjang.';
        }
    }
}

?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Sistem Kasir Sederhana</title>
</head>
<body>
    <h1>Sistem Kasir Sederhana</h1>

    <?php if ($message): ?>
        <p style="color:red;"><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>

    <?php if (isset($action) && $action === 'checkout'): ?>
        <h2>Struk Pembayaran</h2>
        <div><?php echo $summary ?: 'Tidak ada item.'; ?></div>
        <p><strong>Total: Rp<?php echo number_format($total, 0, ',', '.'); ?></strong></p>
        <p><a href="10.php">Mulai transaksi baru</a></p>
    <?php else: ?>
        <form method="get">
            <label>Pilih menu:
                <select name="item">
                    <?php foreach ($menu as $name => $price): ?>
                        <option value="<?php echo htmlspecialchars($name); ?>"><?php echo htmlspecialchars($name . ' - Rp' . number_format($price, 0, ',', '.')); ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <br><br>
            <label>Jumlah (qty): <input type="number" name="qty" value="1" min="1"></label>
            <br><br>
            <!-- Preserve running total and summary -->
            <input type="hidden" name="total" value="<?php echo (int)$total; ?>">
            <input type="hidden" name="summary" value="<?php echo htmlspecialchars($summary); ?>">

            <button type="submit" name="action" value="add">Tambah Item</button>
            <button type="submit" name="action" value="checkout">Checkout</button>
        </form>

        <hr>
        <h3>Ringkasan sementara</h3>
        <div><?php echo $summary ?: 'Belum ada item.'; ?></div>
        <p><strong>Total sementara: Rp<?php echo number_format($total, 0, ',', '.'); ?></strong></p>
    <?php endif; ?>

    <hr>
    <p>Petunjuk: pilih menu, masukkan jumlah lalu tekan "Tambah Item" untuk menambahkan ke keranjang. Tekan "Checkout" untuk menyelesaikan dan melihat total.</p>
</body>
</html>
