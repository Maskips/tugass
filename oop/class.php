<?php
    //1. CLASS ADALAH SEBUAH BLUEPRINT TEMPLATE
    //   UNTUK MEMBUAT INSTANCE DARI OBJECT 
    //2. CLASS MENDEFINISIKAN OBJECT
    //3. CLASS MENYIMPAN DATA (PROPERTY) DAN PERILAKU (METHOD)
    
    class Kucing {
    //MEMBUAT PROPERTY
        public $warna = "COKLAT";
        public $jml_kaki = "4";
        public $mkn_fav = "PINDANG";
    
    //MEMBUAT METHOD DENGAN NAMA BERSUARA
        public function bersuara() {
            return "miaw";
        }
    }
    //MEMBUAT OBJECT BARU
    //DITANDAI DENGAN KEYWORD NEW
    $kucing1 = new Kucing;
    
    echo "WARNA KUCING = " . $kucing1->warna . "<br>";
    echo "JUMLAH KAKI = " . $kucing1->jml_kaki . "<br>";
    echo "MAKANAN FAVORIT = " . $kucing1->mkn_fav . "<br>";
    echo "SUARA NYA = " . $kucing1->bersuara();
    
?>