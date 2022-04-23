<?php
    include_once("koneksiprosedural.php");
    $sql = "CREATE DATABASE databuku;";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Pembuatan database sukses";
    }else{
        echo "Terjadi Kesalahan dalaam pembuatan database";
    }
    mysqli_close($cnn);