<?php

    class karyawan {
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
            }
        }
    }

?>