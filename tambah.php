<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, initial-scale=1.0">
    <title>Tambah Tamu</title>

    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color: dodgerblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {
    background-color: #45a049;
}

div{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
body{
    font-family:sans-serif;
}
h3{
    text-align: center;
    background-color: dodgerblue;
    color: #f2f2f2;
}
</style>
</head>
<body>

<h3>Masukan Data Tamu</h3>

<div>
    <form method="POST"
action="aksi_tambah_tamu.php">
  <label for="fname">Name Lengkap</label>
  <input type="text" id="nama" name="nama lengkap" placeholder="Masukan nama lengkap..."required>
  <label for="fname">Asal Instansi</label>
  <input type="text" id="instansi" name="asal instansi" placeholder="Masukan asal instansi..."required>
  <label for="fname">Alamat</label>
  <input type="text" id="alamat" name="alamat" placeholder="Masukan alamat..."required>
  <label for="fname">Keperluan</label>
  <input type="text" id="keperluan" name="keperluan" placeholder="Masukan keperluan anda..."required>
  <label for="fname">Nomor hp</label>
  <input type="text" id="hp" name="no hp" placeholder="Masukan nomor hp..."required>
  <br>
  <input type="submit" class="button" value="SIMPAN">
</form>
</div>
</body>
</html>