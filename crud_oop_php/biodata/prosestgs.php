<?php

    include '../databasee.php';
    $siswa = new Biodata();

    $aksi = $_GET['aksi'];
    if (isset($_POST['save'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $umur = date('Y') - $tgl_lahir;
    }

    if ($aksi == "tambah") {
        $siswa->create($nama, $alamat, $tgl_lahir, $jk, $agama,$umur);
        header("Location:indextgs.php");
    } elseif ($aksi == "update") {
        $siswa->update($id, $nama, $alamat, $tgl_lahir, $jk, $agama, $umur);
        header("Location:indextgs.php");
    } elseif ($aksi == "delete") {
        $siswa->delete($_GET['id']);
        header("Location:indextgs.php");
    }

?>