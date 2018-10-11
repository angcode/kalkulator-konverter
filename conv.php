<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Converter Mata Uang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
    <?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'USD':
                $hasil = "Rp. " . $bil1 * 15000;
            break;
            case 'EUR':
                $hasil = "Rp. " . $bil1 * 11000;
            break;
            case 'YEN':
            $hasil =  "Rp. " . $bil1 * 150;
            break;

        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">Konverter mata uang</h2>
        <a class="link" href="index.php">Kembali ke kalkulator</a>
        <form method="post" action="conv.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Ingin Ganti ke Berapa ?" >
            <select class="opt" name="operasi">
                <option value="USD">Dollar</option>
                <option value="EUR">Euro</option>
                <option value="YEN">Yen</option>
            </select>
            <input type="submit" name="hitung" value="Convert" class="tombol">
        <form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" placeholder="Rp." class="bil">
        <?php } ?>
    </div>
</body>
</html>