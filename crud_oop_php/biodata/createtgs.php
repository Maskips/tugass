<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Create Biodata</title>
</head>
<body><br><br>
<center><b>I N P U T</b></center>
<center><b>B I O D A T A</b></center><br>

<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">
            
            <form action="prosestgs.php?aksi=tambah" method="POST">
              <div class="form-group">
                <label for=""><b>NAMA LENGKAP :</b></label>
                  <input type="text" class="form-control" name="nama"><br>
              </div>
              <div class="form-group">
                <label for=""><b>ALAMAT :</b></label>
                  <textarea class="form-control" name="alamat" rows="3"></textarea><br>
              </div>
              <div class="form-group">
                <label for=""><b>TANGGAL LAHIR :</b></label>
                  <input type="date" class="form-control" name="tgl_lahir"><br>
              </div>
              <div class="form-group">
                <label for=""><b>JENIS KELAMIN :</b></label><br>
                  <input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
                  <input type="radio" name="jk" value="Perempuan">Perempuan<br>
              </div>
              <div class="form-group">
                <label for=""><b>AGAMA :</b></label><br>
                  <select name="agama" class="form-control"><br>
                    <option>P I L I H</option>
                    <option>- Islam</option>
                    <option>- Kristen</option>
                    <option>- Hindu</option>
                    <option>- Budha</option>
                    <option>- Katolik</option>
                  </select>
              </div><br>
              <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary">S I M P A N</button>
                  <a href="indextgs.php" class="btn btn-warning">K E M B A L I</a>
              </div>
            </form>

          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>