<?php
$servername = "localhost";
$username = "root";
$password = "";

// koneksi database 
$koneksi = mysqli_connect($servername , $username , $password);
error_reporting(0);

if (!$koneksi)
{
    echo "<br> koneksi database gagal";
    die;
}

$query = " CREATE DATABASE db_05_01";
if (mysqli_query($koneksi, $query)){
    echo "database crreated sucses";
}else{
    echo "database eror" . mysqli_error($koneksi);
}

echo " <br> koneksi berhasil";
?>