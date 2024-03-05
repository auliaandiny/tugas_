<?php
// Koneksi ke database (gantilah nilai-nilai ini sesuai dengan pengaturan database Anda)
include 'koneksi.php';

// Ambil data dari formulir
$nama = $_POST['nama'];
$created_at = $_POST['created_at'];

// Query SQL untuk menyimpan data anggota
$sql = "INSERT INTO tb_kategori (nama_kategori, created_at) VALUES ('$nama', '$created_at')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data kategori berhasil disimpan!");</script>';
    echo "<meta http-equiv='refresh' content='0; url=kategori.php'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
