<?php
    include '../database.php';
    $siswa = new Siswa();
?>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Latihan CRUD - Show Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        foreach ($siswa->show($_GET['id']) as $data) {
            $id = $data['id'];
            $nis = $data['nis'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nomor Induk Siswa</th>
                <td><input type="number" name="nis" value="<?php echo $nis; ?>"required></td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"required></td>
            </tr>
            <tr>
                <th>Alamat Siswa</th>
                <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>