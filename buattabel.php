<?php
    include_once("koneksiprosedural.php");
    $sql = "CREATE TABLE Buku(
        No_Buku Varchar(8) PRIMARY KEY,
        Judul Varchar(50),
        Pengarang Varchar(20),
        Jenis_Buku Varchar(10)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "pembuatan tabel sukses";
}else{
    echo "pembuatan tabel gagal";
}