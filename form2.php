

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>FORM 2</title>
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

<br>
<center><label><b><h2>* FORM DATA BARANG *</h2></b></label></center>
    <?php
        if(isset($_POST['submit'])){
            $nama       = $_POST['nama'];
            $alamat     = $_POST['alamat'];
            $jk         = $_POST['jk'];
            $tglbeli    = $_POST['tglbeli'];
            $jumlahbeli = $_POST['jumlahbeli'];

        for($a=0; $a < $jumlahbeli; $a++) {
    ?>
    
<div class="container">
    <div class="row" style="padding: 20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b></b>
                    <div class="card-body">

                    <form action="output1.php" method="POST">    
                        <div class="form-group">
                            <label for=""><b>NAMA BARANG : </b></label>
                            <input type="text" name="namabrg[]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><b>KODE BARANG : </b></label>
                            <input type="number" name="kodebrg[]" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label for=""><b>JENIS BARANG :</b></label>
                            <select name="jenisbrg[]" class="form-control">
                                <option value="">P I L I H A N</option>
                                <option value="Baju Bola Man.Utd">BAJU BOLA MAN.UTD</option>
                                <option value="Baju Bola Man.City">BAJU BOLA MAN.CITY</option>
                                <option value="Baju Bola Liverpool">BAJU BOLA LIVERPOOL</option>
                                <option value="Baju Bola Chelsea">BAJU BOLA CHELSEA</option>
                                <option value="Baju Bola Arsenal">BAJU BOLA ARSENAL</option>
                                <option value="Baju Bola Tottenham Hostspur">BAJU BOLA TOTTENHAM HOTSPUR</option>
                            </select><br>
                        </div>
                        <div class="form-group">
                            <label><b>HARGA SATUAN : </b></label><br>
                            <input type="number" name="hargabrg[]" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label><b>JUMLAH BARANG : </b></label><br>
                            <input type="number" name="jumlahbrg[]" class="form-control"></input><br> 
                        </div>        
                        <?php 
                            } 
                        ?>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">B E L I</button>
                            <button type="reset" class="btn btn-warning">R E S E T</button>
                        </div>

                            <input type="hidden" name="nama"   value="<?php echo $nama; ?>">
                            <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
                            <input type="hidden" name="jk"     value="<?php echo $jk; ?>">
                            <input type="hidden" name="tglbeli"   value="<?php echo $tglbeli; ?>">
                            <input type="hidden" name="jumlahbeli" value="<?php echo $jumlahbeli; ?>">
            
                    </form>
                        
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

<?php
    }
?>