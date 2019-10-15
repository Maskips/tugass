<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan Crud - Create Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
        <legend>Input Data Siswa</legend>
        <form action="proses.php?aksi=tambah" method="POST">
            <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" required></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat Siswa</th>
                    <td><textarea name="alamat" cols="40" required></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="SIMPAN"</th>
                </tr>
            </table>
        </form>
    </fieldset>    
</body>
</html>