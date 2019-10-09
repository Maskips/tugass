
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>FORM 1</title>
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
<center><label><b><h2>* FORM DATA PEMBELI *</h2></b></label></center>

<div class="container">
    <div class="row" style="padding: 20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b></b>
                    <div class="card-body">

                    <form action="form2.php" method="POST">    
                        <div class="form-group">
                            <label for=""><b>NAMA PEMBELI : </b></label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><b>ALAMAT : </b></label>
                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label><b>JENIS KELAMIN : </b></label><br>
                            <input type="radio" name="jk" value="Laki-Laki">Laki - Laki</input><br>
                            <input type="radio" name="jk" value="Perempuan">Perempuan</input> 
                        </div>
                        <div class="form-group">
                            <label><b>TANGGAL PEMBELIAN : </b></label><br>
                            <input type="date" name="tglbeli" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label><b>JUMLAH BELI : </b></label><br>
                            <input type="number" name="jumlahbeli" class="form-control"></input><br> 
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">S I M P A N</button>
                            <button type="reset" class="btn btn-warning">R E S E T</button>
                        </div>
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
