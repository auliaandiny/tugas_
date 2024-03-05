<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["simpan"])) {
    // Mengambil data dari form
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $isbn = $_POST['isbn'];
    $jumbuku = $_POST['jumbuku'];
    $jumsalin = $_POST['jumsalin'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    // Koneksi ke database
    include 'koneksi.php';

    // Upload gambar
    $gambar = $_FILES["gambar"]["name"];
    $gambar_tmp = $_FILES["gambar"]["tmp_name"];
    $upload_folder = "buku/"; // Direktori penyimpanan gambar
    move_uploaded_file($gambar_tmp, $upload_folder . $gambar);

    // Query SQL untuk menyimpan data ke tabel tb_buku
    $sql = "INSERT INTO tb_buku (judul_buku, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, jumlah_salinan, kategori_buku, deskripsi_buku, gambar_sampul) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$isbn', '$jumbuku', '$jumsalin', '$kategori', '$deskripsi', '$gambar')";

    if ($koneksi->query($sql) === TRUE) {
        // Pemberitahuan bahwa data berhasil disimpan
        echo '<script language="javascript" type="text/javascript">
          alert("Data buku berhasil disimpan.");</script>';
        // Redirect ke halaman buku.php setelah data berhasil disimpan
        echo "<meta http-equiv='refresh' content='0; url=buku.php'>";
    } else {
        // Pemberitahuan jika terjadi kesalahan saat menyimpan data
        echo '<script language="javascript" type="text/javascript">
          alert("Terjadi kesalahan. Data buku gagal disimpan.");</script>';
        // Menampilkan pesan error SQL jika ada
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    // Menutup koneksi ke database
    $koneksi->close();
}
?>
