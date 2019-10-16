<?php 
class Databasee {
    public $host = "localhost", $user = "root", $pass = 123, $db="Latihan";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
class Biodata extends Databasee {
    // Menampilkan Semua Data
    public function index()
    {
        
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata");
        // var_dump($datasiswa);
        return $datasiswa;
    }
    // Menambah Data
    public function create($nama, $alamat, $tgl_lahir, $jk, $agama)
    {
        
        mysqli_query($this->koneksi,"insert into biodata values('','$nama','$alamat','$tgl_lahir','$jk',
        '$agama')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $datasiswa;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tgl_lahir, $jk, $agama)
    {
        mysqli_query($this->koneksi,"update biodata set nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir',
        jk='$jk', agama='$agama' where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
// koneksi DB
$db = new Databasee();
?>