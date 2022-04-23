<?php
include_once("koneksiprosedural.php");
$no_buku ="CC004";
$judul ="Sepakbola";
$pengarang ="Andi";
$jenis_buku ="Pengetahuan";

$sql = "INSERT INTO buku(No_Buku, Judul, Pengarang, Jenis_Buku)
       Values('$no_buku', '$judul', '$pengarang', '$jenis_buku')";
       
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Insert Data Ket tabel buku sukses<br>";
}else{
    echo "Tnsert Data Gagal<br>";
}