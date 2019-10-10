
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>KEMBALIAN</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand"><b>RAFLI SAPUTRA</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Halaman Utama <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form1.php">Form 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Form 2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="loginbro.php">Log-in <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logoutbro.php">Log-out <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container" style="padding:20px;">
    <div class="row" style="padding:20px;">
      <div class="col-md-12">
        <div class="card">
            <?php
            if(isset($_POST['byr'])){
                $hargasatuan = $_POST['hargasatuan'];
                $jumlahbarang = $_POST['jumlahbarang'];
                $num = $_POST['num'];
                $total = $_POST['total'];
                $kembalian = $num - $total;
            }
            ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td><b><h3>KEMBALIAN</h3></b></td>
                            <td align="right"><b><h3><?= "Rp. $kembalian"; ?></h3></b></td>
                        </tr>
                    </table>
                    
                    <form action="" method="post">
                    <div class="form-group" align="center"><br>
                        <tr>
                            <td align="center"><b>MAU BELANJA LAGI ?</b></td><br>
                            <td><a href="form1.php"><input type="button" class="btn btn-success" value="MAU"></a>
                            <td><input type="submit" name="proses" class="btn btn-danger" value="TIDAK">
                            </td>
                        </tr>
                    </form>
                    </div>
                    <?php
                    if(isset($_POST['proses'])){?>
                    <div class="form-group">
                        <div class="page-header"><h2 align="center">TERIMA KASIH TELAH BER-BELANJA DI TOKO SAYA </h2><br>
                        <h2 align="center">SEE YOU</h2>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>