<?php
    include '../databasee.php';
    $siswa = new Biodata();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>Edit Biodata</title>
</head>
<body>
    <?php
        foreach ($siswa->edit($_GET['id']) as $data) {
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

<form action="prosestgs.php?aksi=update" method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <center><legend><b>EDIT BIODATA</b></legend></center><br> 
        <table>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>NAMA LENGKAP</b></label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>"required>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>ALAMAT</b></label>
                <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="40" required> <?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>TANGGAL LAHIR</b></label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"required>
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>JENIS KELAMIN</b></label>
                <div class="col-sm-10">
                <input type="radio" name="jk" value="Laki-Laki" 
                    <?php if ($jk == "Laki-Laki") { ?> checked <?php } ?>>Laki-Laki<br>
                <input type="radio" name="jk" value="Perempuan"
                    <?php if ($jk == "Perempuan") { ?> checked <?php } ?>>Perempuan
                </div>
            </div>
            <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label"><b>AGAMA</b></label>
                <div class="col-sm-10">
                <select name="agama" class="form-control">
                    <option value="Islam"   <?php if ($agama == "Islam") { ?> selected <?php } ?>>- Islam</option>
                    <option value="Kristen" <?php if ($agama == "Kristen") { ?> selected <?php } ?>>- Kristen</option>
                    <option value="Hindu"   <?php if ($agama == "Hindu") { ?> selected <?php } ?>>- Hindu</option>
                    <option value="Budha"   <?php if ($agama == "Budha") { ?> selected <?php } ?>>- Budha</option>
                    <option value="Katolik" <?php if ($agama == "Katolik") { ?> selected <?php } ?>>- Katolik</option>
                </select>
                </div>
            </div><br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-success" name="save" value="S I M P A N">
                        <a href="indextgs.php" class="btn btn-warning">K E M B A L I</a>
                    </div>
                </div>
            </div>
        </table>
</form>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>