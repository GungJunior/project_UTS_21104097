<?php
    include_once("konfigurasi.php");
    //server:localhost (127.0.0.1)
    //user :root 
    //password:""
//metode Prosedural
$cnn = mysqli_connect (dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT)
    or die ("Terjadi kesalahan saat koneksi ke database");
/**/

/*
//motode OOP
$cn = new mysqli (dbSERVER,dbUSER,dbPWD);
if($cn->connect_error){
    die("Terjadi Kesalahan Saat Koneksi ke Database");
}
*/
echo "koneksi ke database sukses";