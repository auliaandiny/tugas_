<?php
// Koneksi ke database (pastikan Anda mengganti nilai-nilai ini dengan kredensial database Anda)
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "dbpeminjamanbuku"; // Ganti dengan nama database Anda

// Buat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk membuat tabel tb_ulasan jika belum ada
$query_create_table = "CREATE TABLE IF NOT EXISTS tb_buku_ulasan (
    id_ulasan INT AUTO_INCREMENT PRIMARY KEY,
    ulasan TEXT,
    rating INT,
    created_at DATETIME
)";


// Tangkap data yang dikirimkan dari formulir
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];
$created_at = date('Y-m-d H:i:s'); // Waktu saat ini

// Query untuk menyimpan ulasan ke dalam tabel tb_ulasan
$query_insert_review = "INSERT INTO tb_buku_ulasan (ulasan, rating, created_at) VALUES ('$ulasan', '$rating', '$created_at')";

// Eksekusi query untuk menyimpan ulasan
if (mysqli_query($koneksi, $query_insert_review)) {
    echo "<script>alert('Ulasan berhasil disimpan! Terima kasih atas ulasannya.')</script>";
} else {
    echo "Error: " . $query_insert_review . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
