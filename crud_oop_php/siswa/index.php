<?php
    include '../database.php';
    $db = new Database();
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Latihan Crud - Read Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>Data Siswa</center>
    <a href="create.php">Input Data Siswa</a><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nomor Induk</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $siswa = new Siswa();
            $no = 1;
            foreach ($siswa->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><center><?php echo $data['nis']; ?></center></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><a href="show.php?id=<?php echo $data['id']; ?>">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm"('Yakin Slur?...');>Delete</a></td>
        </tr>
        <?php 
            } 
        ?>
    </table>
</body>
</html>