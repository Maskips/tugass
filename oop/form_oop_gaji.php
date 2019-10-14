<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM PENGGAJIAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body><br>
<fieldset>
    <legend>P E N G G A J I A N</legend>
    <form action="form_gaji_output.php" method="POST"><br>
        <label for="">NAMA : </label><br>
            <input type="text" name="nama"><br><br>
        <label for="">NIP : </label><br>
            <input type="number" name="nip"><br><br>
        <label for="">ALAMAT : </label><br>
            <textarea cols="21" rows="3" name="alamat"></textarea><br><br>
        <label for="">HARI KERJA : </label><br>
            <input type="number" name="hari" max="30"><br><br>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
</fieldset>
</body>
</html>