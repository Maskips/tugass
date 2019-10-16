<?php
    include '../databasee.php';
    $db = new Databasee();
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Crud Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="container">
  <div class="row" style="padding: 20px;">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><b></b>
          <div class="card-body">

  <center><a href="createtgs.php">INPUT BIODATA</a></center><br><br>
    <table border="1" align="center">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php
            $siswa = new Biodata();
            $no = 1;
            foreach ($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><a href="showtgs.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edittgs.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="prosestgs.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm"('Yakin Slur?...');>Delete</a></td>
        </tr>
        <?php 
            } 
        ?>
    </table>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>