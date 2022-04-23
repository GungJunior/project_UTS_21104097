<?php
    include_once("konfigurasi.php");
    //server: localhost ( 127.0.0.1 )
    //user: root
    //password:''

    //Metode Prosedural
    $cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT)
        or die("Terjadi kesalahan saat koneksi ke database");

    echo "koneksi ke database sukses";