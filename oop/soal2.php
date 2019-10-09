<?php

    class Akun {

        public    $user="Kipli";
        protected $id="Rafli";
        private   $password="Saputra";

        public function menampilkan_password1() {
            return $this->password;
        }
    }
    class Pengguna extends Akun {

        public function menampilkan_user() {
            return $this->user;
        }
        public function menampilkan_id() {
            return $this->id;
        }
        public function menampilkan_password() {
            return $this->password;
        }
    }

    $fly = new Pengguna;
    echo "User : " .$fly->menampilkan_user();
    echo "<br>";
    echo "I D : " .$fly->menampilkan_id();
    echo "<br>";
    echo "Password (Private) : " .$fly->menampilkan_password();
    echo "<br>";

    $fly1 = new Akun;
    echo "Password (Non Private) : " .$fly->menampilkan_password1();
    echo "<br>";
?>