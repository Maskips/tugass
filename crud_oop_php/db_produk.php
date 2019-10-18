<?php 
class DBproduk {
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
class Produk extends DBproduk {
    // Menampilkan Semua Data
    public function index()
    {
        
        $dataproduk = mysqli_query($this->koneksi,"select * from produk");
        // var_dump($datasiswa);
        return $dataproduk;
    }
    // Menambah Data
    public function create($nama, $kategori, $jumlah, $harga, $deskripsi, $subtotal)
    {
        
        mysqli_query($this->koneksi,"insert into produk values(null,'$nama','$kategori','$jumlah','$harga',
        '$deskripsi','$subtotal')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $dataproduk = mysqli_query($this->koneksi,"select * from produk where id='$id'");
        return $dataproduk;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $dataproduk = mysqli_query($this->koneksi,"select * from produk where id='$id'");
        return $dataproduk;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $kategori, $jumlah, $harga, $deskripsi, $subtotal)
    {
        mysqli_query($this->koneksi,"update produk set nama='$nama', kategori='$kategori', jumlah='$jumlah',
        harga='$harga', deskripsi='$deskripsi', subtotal='$subtotal' where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from produk where id='$id'");
    }
}
// koneksi DB
$db = new DBproduk();
?>