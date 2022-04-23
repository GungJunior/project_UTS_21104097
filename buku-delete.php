<?php

include_once("koneksiprosedural.php");
$sql = "DELETE FROM buku WHERE no_buku ='CC006';";

$hsl = (mysqli_query($cnn,$sql));

if($hsl){
    echo "Proses Hapus Berhasil<br>";
}else{
    echo "Proses Hapus Gagal<br>";
}