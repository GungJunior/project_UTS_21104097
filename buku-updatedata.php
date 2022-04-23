<?php

include_once("koneksiprosedural.php");
$no_buku ="";
$judul ="";
$pengarang ="";
$jenis_buku ="";

$sql = "UPDATE buku SET Pengarang='Ketut' WHERE no_buku='CC005'";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Pengubahan Data Berhasil<br>";
}else{
    echo "Pengubahan Gagal<br>";
}
mysqli_close($cnn);