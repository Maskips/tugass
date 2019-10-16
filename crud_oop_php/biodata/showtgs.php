<?php
    include '../databasee.php';
    $siswa = new Biodata();
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Show Biodata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        foreach ($siswa->show($_GET['id']) as $data) {        
    ?>
    <fieldset>
        <legend><b>SHOW BIODATA</b></legend><br>
            <table>
                <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"required></td>
                </tr>
                <tr>
                    <th>Alamat </th>
                    <td><textarea name="alamat" cols="21" value="<?php $data['alamat']; ?>"required></textarea></td>
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
            </table><br>
    </fieldset>
<?php 
    }
?>
</body>
</html>