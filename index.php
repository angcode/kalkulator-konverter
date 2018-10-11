<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kalulator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
            break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
            break;
            case 'kali':
            $hasil = $bil1 * $bil2;
            break;
            case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
            case 'modulus':
            $hasil = $bil1 % $bil2;
            break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <a class="link" href="conv.php">Swicth to converter</a>
        <form method="post" action="index.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan bilangan">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan bilangan">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
                <option value="modulus">%</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        <form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
</body>
</html>