<?php

class Matematika {

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $b != 0 ? $a / $b : "Tidak bisa dibagi 0";
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

$hasil = "";

if (isset($_POST['proses'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $sisi = $_POST['sisi'];

    $hasil .= "Tambah: " . Matematika::tambah($a, $b) . "<br>";
    $hasil .= "Kurang: " . Matematika::kurang($a, $b) . "<br>";
    $hasil .= "Kali: " . Matematika::kali($a, $b) . "<br>";
    $hasil .= "Bagi: " . Matematika::bagi($a, $b) . "<br>";
    $hasil .= "Luas Persegi: " . Matematika::luasPersegi($sisi);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 2</title>
    <style>
        body {
            font-family: 'Segoe UI';
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 330px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
            color: #2a5298;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 6px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            background: #2a5298;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #1e3c72;
        }

        .hasil {
            margin-top: 15px;
            padding: 12px;
            background: #f1f5f9;
            border-radius: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Kalkulator</h2>

    <form method="POST">
        <input type="number" name="a" placeholder="Masukkan Angka A" required>
        <input type="number" name="b" placeholder="Masukkan Angka B" required>
        <input type="number" name="sisi" placeholder="Masukkan Sisi Persegi" required>
        <button name="proses">Hitung</button>
    </form>

    <div class="hasil">
        <?= $hasil ?>
    </div>
</div>

</body>
</html>