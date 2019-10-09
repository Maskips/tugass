<?php

    class KOMPUTER {
        protected $jenis_processor = "Intel Core 17-4790 3.6Ghz";
    }
    class LAPTOP extends KOMPUTER {
        public function tampilkan_processor() {
            return $this->jenis_processor;
        }
    }

    $laptop_baru = new LAPTOP();

    echo $laptop_baru->tampilkan_processor();

?>