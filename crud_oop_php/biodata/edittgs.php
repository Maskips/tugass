<?php
    include 'databasee.php';
    $siswa = new Biodata();
?>


<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edit Biodata</title>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        foreach ($siswa->edit($_GET['id']) as $data) {
    ?>
    <fieldset>
        <legend>Edit Biodata</legend>
        <form action="prosestgs.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"required></td>
                </tr>
                <tr>
                    <th>Alamat </th>
                    <td><textarea name="alamat" cols="40" required><?php echo $data['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir </th>
                    <td><input type="text" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>"required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin </th>
                    <td><input type="text" name="jk" value="<?php echo $data['jk']; ?>"required></td>
                </tr>
                <tr>
                    <th>Agama </th>
                    <td><input type="text" name="agama" value="<?php echo $data['agama']; ?>"required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"</th>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
        }
    ?>
</body>
</html>