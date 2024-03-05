<?php
// Menginisialisasi koneksi ke database
include 'koneksi.php'; // Sesuaikan dengan lokasi file koneksi.php

// Cek jika ada parameter pencarian yang dikirimkan
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    // Query untuk mencari buku berdasarkan judul atau penulis
    $query = "SELECT * FROM tb_buku WHERE judul_buku LIKE '%$keyword%' OR pengarang LIKE '%$keyword%'";
    // Lakukan query ke database
    $result = mysqli_query($koneksi, $query);

    // Tampilkan hasil pencarian
    if (mysqli_num_rows($result) > 0) {
        // ... kode tampilan hasil pencarian ...
    } else {
        // ... kode jika tidak ada buku yang sesuai ...
    }
}
?>
