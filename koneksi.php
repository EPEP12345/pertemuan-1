<?php
// memebuat koneksi ke database
$koneksi=mysqli_connect("localhost","root","","ulangan");

// cek koneksi ke database
if(!$koneksi){
    die("koneksi gagal bro!".mysqli_connect_error());
}
// echo "koneksi berhasil !";
?>