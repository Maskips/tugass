<?php
    include '../databasee.php';
    $siswa = new Biodata();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Show Biodata</title>
</head>
<body>
    <?php
        foreach ($siswa->show($_GET['id']) as $data) {  
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jk = $data['jk'];
            $agama = $data['agama'];
        }      
    ?>

<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">            
            
    <center><legend><b>SHOW BIODATA</b></legend></center><br><br>
        <table>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>NAMA LENGKAP</b></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>ALAMAT</b></label>
                <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="21"  readonly><?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>TANGGAL LAHIR</b></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label" readonly><b>JENIS KELAMIN</b></label>
                <div class="col-sm-10">
                <?php if ($jk == "Laki-Laki") { ?>
                <input type="radio" name="jk" value="Laki-Laki" checked readonly>Laki-Laki<br>
                <?php } elseif ($jk == "Perempuan") { ?>
                <input type="radio" name="jk" value="Perempuan" checked readonly>Perempuan
                <?php } ?>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>AGAMA</b></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="agama" value="<?php echo $agama; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <a href="indextgs.php" class="btn btn-warning">K E M B A L I</a>
                </div>
            </div>
        </table>
            <br>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>