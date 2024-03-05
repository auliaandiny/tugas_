<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Ulasan Buku</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .success {
        color: green;
    }
    .error {
        color: red;
    }
    .btn {
        display: inline-block;
        background-color: #4682B4;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        margin-bottom: 20px; /* Menambahkan margin bawah untuk jarak */
    }

    .btn:hover,
    .delete-btn:hover {
        background-color: #d32f2f; /* Warna latar belakang saat tombol dihover */
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color:  #4682B4;
    }
    .delete-btn {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Data Ulasan Buku</h2>
    <!-- Tombol untuk kembali ke halaman awal -->
    <a href="index.php" class="btn">Kembali</a>
    <table>
        <tr>
            <th>ID Ulasan</th>
            <th>Judul Buku</th>
            <th>Ulasan</th>
            <th>Rating</th>
            <th>Dibuat pada</th>
            <th>Tindakan</th>
        </tr>
        <?php
        // Koneksi ke database (pastikan Anda mengganti nilai-nilai ini dengan kredensial database Anda)
        $host = "localhost"; // Ganti dengan host database Anda
        $username = "root"; // Ganti dengan username database Anda
        $password = ""; // Ganti dengan password database Anda
        $database = "dbpeminjamanbuku"; // Ganti dengan nama database Anda

        $koneksi = mysqli_connect($host, $username, $password, $database);

        // Periksa koneksi
        if (!$koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Query SELECT
        $query = "SELECT * FROM tb_buku_ulasan";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_ulasan'] . "</td>";
                echo "<td>" . (isset($row['judul_buku']) ? $row['judul_buku'] : 'Data tidak tersedia') . "</td>";

                echo "<td>" . $row['ulasan'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
                echo "<td><form method='post'><input type='hidden' name='id_ulasan' value='" . $row['id_ulasan'] . "'><button type='submit' name='delete' class='delete-btn'>Hapus</button></form></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data ulasan.</td></tr>";
        }

        // Tutup koneksi database
        mysqli_close($koneksi);
        ?>
    </table>
    <?php
    // Proses penghapusan data jika tombol Hapus diklik
    if (isset($_POST['delete'])) {
        $koneksi = mysqli_connect($host, $username, $password, $database);
        $id_ulasan_to_delete = $_POST['id_ulasan'];

        $query_delete = "DELETE FROM tb_buku_ulasan WHERE id_ulasan = '$id_ulasan_to_delete'";

        if (mysqli_query($koneksi, $query_delete)) {
            echo "<p class='success'>Data ulasan berhasil dihapus!</p>";
        } else {
            echo "<p class='error'>Error: " . $query_delete . "<br>" . mysqli_error($koneksi) . "</p>";
        }

        mysqli_close($koneksi);
    }
    ?>
</div>

</body>
</html>
