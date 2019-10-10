
            
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>HALAMAN OUT-PUT</title>
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
        <a class="nav-link">||<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form1.php">Form 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link">||<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Form 2 <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<br>

<div class="container" style="padding:20px;">
    <div class="row" style="padding:20px;">
      <div class="col-md-12">
        <div class="card">
        <?php
            if(isset($_POST['submit'])){
                $namabrg     = $_POST['namabrg'];
                $kodebrg     = $_POST['kodebrg'];
                $jenisbrg    = $_POST['jenisbrg'];
                $hargasatuan = $_POST['hargabrg'];
                $jumlahbrg   = $_POST['jumlahbrg'];
              
                $nama        = $_POST['nama'];
                $alamat      = $_POST['alamat'];
                $jk          = $_POST['jk'];
                $tglbeli     = $_POST['tglbeli'];
                $jumlahbeli  = $_POST['jumlahbeli'];
            }
            ?>
            <div class="card-body">
                <div class="table-responsive">
                    <center><h3><b>*DATA DIRI PEMBELI*</b></h3></center>
                    <table class="table">
                        <tr>
                            <th>NAMA </th>
                            <th>ALAMAT </th>
                            <th>JENIS KELAMIN </th>
                            <th>TANGGAL PEMBELIAN </th>
                            <th>JUMLAH </th>
                        </tr>
                        <tr>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $jk; ?></td>
                            <td><?php echo $tglbeli; ?></td>
                            <td><?php echo $jumlahbeli; ?></td>
                        </tr>
                    </table><br>
                    <center><h3><b>*DAFTAR PEMBELIAN BAJU*</b></h3></center>
                    <table class="table">
                        <tr>
                            <th>NO</th>
                            <th>NAMA BARANG</th>
                            <th>KODE BARANG</th>
                            <th>JENIS BARANG</th>
                            <th>HARGA SATUAN</th>
                            <th>JUMLAH BARANG</th>
                            <th>TOTAL HARGA</th>
                        </tr>
                        
                        <?php foreach($namabrg as $key => $value) { ?>
                        <tr>
                            <td><?= $key+1; ?></td>
                            <td><?= $namabrg[$key]; ?></td>
                            <td><?= $kodebrg[$key]; ?></td>
                            <td><?= $jenisbrg[$key]; ?></td>
                            <td><?= "Rp. $hargasatuan[$key]"; ?></td>
                            <td><?= $jumlahbrg[$key]; ?></td>
                            <?php $tohar = $hargasatuan[$key]*$jumlahbrg[$key]; ?>
                            <td><?= $tohar; ?></td>
                            <?php $total += $hargasatuan[$key]*$jumlahbrg[$key]; ?>
                        </tr>
                        <?php } ?>
                    </table><br>
                    <center><h3><b>*PEMBAYARAN*</b></h3></center>
                    <table class="table">
                        <?php
                        $a = $total;
                        if($total >= 500000){
                            $b = $a * 0.2;
                            $e = "(20%)";
                            $c = $a - $b;
                        }
                        else if($total >= 250000){
                            $b = $a * 0.1;
                            $e = "(10%)";
                            $c = $a - $b;
                        }
                        else if($total >= 150000){
                            $b = $a * 0.05;
                            $e = "(5%)";
                            $c = $a - $b;
                        }
                        else{
                            $b = 0;
                            $e = "(0%)";
                            $c = $a - $b;
                        }
                        ?>
                        <tr>
                            <th>Sub Harga</th>
                            <td align="right"><?= "Rp .$a"; ?></td>
                        </tr>
                        <tr>
                            <th>Diskon<?= $e; ?></th>
                            <td align="right"><?= "Rp. $b"; ?></td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td align="right"><?= "Rp. $c"; ?></td>                        
                        </tr>

                    </table>
                    
                    <table class="table">
                    <form action="pembayaran.php" method="post">
                        <input type="hidden" name="total" value="<?= $c; ?>">
                        <input type="hidden" name="hargabrg[]" value="<?= $hargasatuan[$key]; ?>">
                        <input type="hidden" name="jumlahbrg[]" value="<?= $jumlahbrg[$key]; ?>">
                        <tr>
                            <th>Masukan Pembayaran</th>
                            <th><input type="number" min="<?= $c; ?>" name="num" id="" placeholder="Masukan Pembayaran">
                                <button type="submit" name="byr" class="btn btn-primary">B A Y A R</button>
                            </th>
                        </tr>    
                    </form>
                    </table>
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
