<?php
class Produk {
    public static $jumlahProduk = 0;
    public static $totalHarga = 0;

    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
        self::$totalHarga += $this->harga;
    }
}

class Transaksi {
    final public function prosesTransaksi() {
        return "Transaksi berhasil diproses!";
    }
}

$p1 = new Produk("Laptop", 8000000);
$p2 = new Produk("Mouse", 150000);
$p3 = new Produk("Keyboard", 300000);

$p1->tambahProduk();
$p2->tambahProduk();
$p3->tambahProduk();

$transaksi = new Transaksi();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Produk</title>
    <style>
        body {
            font-family: 'Segoe UI';
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            margin: 0;
            padding: 20px;
            color: white;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .card {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
        }

        .produk {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            color: #00ffcc;
        }

        .btn {
            background: #00c9a7;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background: #00a78e;
        }

        .output {
            background: #1e293b;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>💻 Sistem Produk & Transaksi</h1>

    <div class="card">
        <h3>📦 Daftar Produk</h3>
        <div class="produk">
            <span><?= $p1->nama ?></span>
            <span>Rp <?= number_format($p1->harga) ?></span>
        </div>
        <div class="produk">
            <span><?= $p2->nama ?></span>
            <span>Rp <?= number_format($p2->harga) ?></span>
        </div>
        <div class="produk">
            <span><?= $p3->nama ?></span>
            <span>Rp <?= number_format($p3->harga) ?></span>
        </div>

        <div class="total">
            Total Bayar: Rp <?= number_format(Produk::$totalHarga) ?>
        </div>
    </div>

    <div class="card">
        <h3>📊 Total Produk</h3>
        <p><?= Produk::$jumlahProduk ?> produk</p>
    </div>

    <div class="card">
        <h3>💳 Simulasi Transaksi</h3>
        <form method="post">
            <button class="btn" name="proses">Proses Transaksi</button>
        </form>

        <?php if(isset($_POST['proses'])): ?>
            <div class="output">
                <?= $transaksi->prosesTransaksi(); ?><br><br>
                💰 Total yang dibayar: <b>Rp <?= number_format(Produk::$totalHarga) ?></b>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>