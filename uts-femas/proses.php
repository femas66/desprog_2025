<?php
session_start();

if (!isset($_SESSION['daftar_pesanan'])) {
    $_SESSION['daftar_pesanan'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $acara = htmlspecialchars($_POST['acara']);
    $jumlah = (int)$_POST['jumlah'];

    $harga_tiket = 0;
    if ($acara == "Konser Musik Rock") {
        $harga_tiket = 500000;
    } elseif ($acara == "Festival Film Indonesia") {
        $harga_tiket = 250000;
    } elseif ($acara == "Pentas Seni Tradisional") {
        $harga_tiket = 150000;
    }
    $total_harga = $harga_tiket * $jumlah;

    $pesanan_baru = [
        'nama' => $nama,
        'email' => $email,
        'acara' => $acara,
        'jumlah' => $jumlah,
        'total_harga' => $total_harga
    ];

    $_SESSION['daftar_pesanan'][] = $pesanan_baru;

    echo "<div class='hasil-container'>";
    echo "<h2>Pemesanan Berhasil!</h2>";
    echo "<p>Terima kasih, <strong>" . htmlspecialchars($pesanan_baru['nama']) . "</strong>. Detail pesanan Anda:</p>";
    echo "<div class='detail-pesanan'>";
    echo "<strong>Acara:</strong> " . htmlspecialchars($pesanan_baru['acara']) . "<br>";
    echo "<strong>Jumlah Tiket:</strong> " . htmlspecialchars($pesanan_baru['jumlah']) . "<br>";
    echo "<strong>Total Harga:</strong> Rp " . number_format($pesanan_baru['total_harga'], 0, ',', '.');
    echo "</div>";
    echo "</div>";

    if (count($_SESSION['daftar_pesanan']) > 0) {
        echo "<h3>Riwayat Pemesanan:</h3>";
        echo "<ul>";
        foreach ($_SESSION['daftar_pesanan'] as $pesanan) {
            echo "<li>" . htmlspecialchars($pesanan['nama']) . " - " . htmlspecialchars($pesanan['acara']) . " (" . htmlspecialchars($pesanan['jumlah']) . " tiket)</li>";
        }
        echo "</ul>";
    }

} else {
    header("Location: index.html");
    exit();
}
?>

<style>
.hasil-container { text-align: center; margin-top: 20px; }
.hasil-container h2 { color: #2ecc71; }
.detail-pesanan { background-color: #f9f9f9; border-left: 5px solid #007bff; padding: 20px; margin-top: 20px; text-align: left; border-radius: 8px; }
h3 { margin-top: 30px; }
ul { list-style: none; padding: 0; text-align: left; }
li { background: #eee; padding: 10px; margin-bottom: 5px; border-radius: 5px; }
</style>