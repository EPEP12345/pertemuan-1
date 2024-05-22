<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"content="width=device-width,initial-scale=1.0">
     <title>daftar tamu</title>

     <style>
         body{
             font-family:sans-serif;
         }

        h2{
             text-align: center;
             background-color:dodgerblue;
             color: #dddddd;
        }
         table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }

        .button {
        background-color: dodgerblue;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
    </style>
</head>
<body>
<h2>BUKU TAMU SMK 17 MUNCAR</h2>

<table>
    <tr>
        <th>Nomor</th>
        <th>Nama Lengkap</th>
        <th>Asal Instansi</th>
        <th>Alamat</th>
        <th>Keperluan</th>
        <th>No Hp</th>
    </tr>
    <tr>
        <?php
            include 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi,"SELECT * FROM daftar tamu");
            while($d=mysqli_fetch_array($data)) {
        ?>
    <tr>   
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama lengkap']; ?></td>
        <td><?php echo $d['asal instansi']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['keperluan']; ?></td>
        <td><?php echo $d['no hp']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
        </td>
    </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="tambah.php" class="button">TAMBAH</a>
    </body>
</html>