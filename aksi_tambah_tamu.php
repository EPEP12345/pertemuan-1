0<?php
// koneksi ke database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama lengkap'];
$instansi = $_POST['asal instansi'];
$alamat = $_POST['alamat'];
$keperluan = $_POST['keperluan'];
$hp = $_POST['no hp'];

//menghitung jumlah data pada tabel
$query=mysqli_query($koneksi,"SELECT *FROM daftar tamu");
$jumlah_data=mysqli_num_rows($query);
if($jumlah_data>=20){
    echo '<script>
    alert("Data sudah penuh");
    <window.location="index.php";
    </script>';
}else{

// menginput data ke database
mysqli_query($koneksi,"insert into ulangan
values('','$nama','$instansi','$alamat','$keperluan','$hp')");

// mengalihkan halaman kembali ke index.php
echo '<script>
     alert("Data Berhasil Disimpan");
     window.location="index.php";
     </script>';
}
?>
