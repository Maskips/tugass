<?php

    class Karyawan {
        public $nama;
        public $pekerjaan;
        public $tahun_bekerja;
        private $gjmanager = 5000000;
        private $gjob = 5000000;
        protected $gaji;

        public function setdata($nama="Mahmud", $pekerjaan="ob", $tahun_bekerja="7") {
            $this->nama = $nama;
            $this->pekerjaan = $pekerjaan;
            $this->tahun_bekerja = $tahun_bekerja;
        }
        public function getdata() {
            if (($this->pekerja=="manager") && ($this->tahun_bekerja>=10)) {
                $this->gaji = $this->tahun_bekerja*$his->gjmanager;
            } else if (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 10)) {
                $this->gaji = $this->tahun_bekerja*$his->gjob;
            } elseif (($this->pekerjaan == "manager") && ($this->tahun_bekerja >= 5)) {
                $this->gaji = $this->tahun_bekerja * ($this->gjmanager - 1000000);
            } elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 5)) {
                $this->gaji = $this->tahun_bekerja * ($this->gjob - 100000);
            } 
            return $this->gaji;
        }
    }

    $karyawan = new Karyawan();
    $karyawan->setdata();

    echo "Nama = $karyawan->nama <br>";
    echo "Pekerjaan = $karyawan->pekerjaan <br>";
    echo "Tahun Bekerja = $karyawan->tahun_bekerja <br>";
    echo "Gaji = " . number_format ($karyawan->getdata(), 0, ",",".") . "<br>";

?>