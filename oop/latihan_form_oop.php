<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM OOP KELUARGA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
    <legend>FORM OOP KELUARGA</legend>
    <form action="" method="POST"><br>
        <label for="">MASUKAN DATA : </label><br>
            <input type="number" name="data" max="10"><br><br>
        <input type="submit" name="simpan" value="SIMPAN"><br><br>
    </form>

<?php
    if(isset($_POST['simpan'])){
        $data = $_POST['data'];
        for($a=1; $a <= $data; $a++) {
?>
    <form action="latihan_oop_output.php" method="POST">
        <hr>
        <label for="">Nama</label><br>
            <input type="text" name="nama[]" required><br>
        <label for="">NIK</label><br>
            <input type="number" name="nik[]" required><br>
        <label for="">Alamat</label><br>
            <textarea name="alamat[]" cols="21" rows="2"></textarea><br>
        <label for="">Umur</label><br>
            <input type="number" name="umur[]" max="70" required><br><br>
        </hr>
<?php 
        } 
?>
        <input type="submit" name="sbm" value="SIMPAN">
    </form>
<?php 
    }
?>

</fieldset>
</body>
</html>
