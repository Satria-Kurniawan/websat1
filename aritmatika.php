<?php

$u1 = "";
$beda = "";
$nilai_n = "";
$hasil = "";
$baris = "";
$barishasil = "";

if (isset($_POST['submit'])) {

    $u1 = $_POST["u1"];
    $beda = $_POST["beda"];
    $nilai_n = $_POST["nilai_n"];

    $a = $u1;
    $b = $beda;
    $n = $nilai_n;

    $hasil = $a + ($n - 1) * $b;

    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $barishasil .= $baris . " ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SatriaWeb</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <div class="container">
            <div class="header">
                <div class="top-side">
                    <img src="media/LogoSat.png" style="float: left;" width="80">
                </div>
                <div class="top-side">
                    <h2 style="margin-left: 8%;">Selamat datang di</h2>
                    <h3 style="margin-left: 8%;">Smartband Arena</h3>
                </div>
            </div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                </ul>    
            </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="#" class="bg-white form-container p-3" id="forminput">
                    <h2><b>Barisan Aritmatika</b></h2>
                    <div class="form-group">
                        <label for="u1">Suku pertama (a) atau (U1)</label>
                        <input type="text" class="form-control" value="<?php echo $u1; ?>" id="u1" placeholder="Masukkan suku pertama" name="u1" required />
                    </div>
                    <div class="form-group">
                        <label for="beda">Beda (b)</label>
                        <input type="text" class="form-control" value="<?php echo $beda; ?>" id="beda" placeholder="Masukkan beda" name="beda" required />
                    </div>

                    <div class="form-group">
                        <label for="nilai_n">Mencari suku ke-</label>
                        <input type="text" class="form-control" value="<?php echo $nilai_n; ?>" id="nilai_n" placeholder="Masukkan suku ke-berapa yang akan dicari" name="nilai_n" required />
                    </div>
                    <br><button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">Hitung</button></br>
                    <div class="form-group">
                        <h4 style="text-align: center;"><b>Hasil</b></h4>
                    </div>
                    <div class="form-group">
                        <h4 style="text-align: center;">Barisan aritmatika</h4>
                        <h4 style="background-color: purple; color: white;; text-align: center; border-radius: 4px;"><?php echo $barishasil; ?></h4>
                    </div>
                    <div class="form-group">
                        <h4 style="text-align: center;">Nilai suku ke-n (Un)</h4>
                        <h4 style="background-color: purple; color: white;; text-align: center; border-radius: 4px;"><?php echo $hasil; ?></h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>