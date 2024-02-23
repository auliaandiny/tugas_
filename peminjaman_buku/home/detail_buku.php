<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tampilan Sampul Buku</title>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.book-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
}

.book-cover {
  position: relative;
  border-bottom: 2px solid #ccc; /* Penambahan garis sebagai penyekat */
  padding-bottom: 20px; /* Tambahan padding bawah agar ada ruang di antara garis dan tombol */
}

.book-cover img {
  width: 100%;
  height: auto;
}

.read-button {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #007bff;
  padding: 10px 20px;
  border-radius: 5px;
}

.read-button a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
}

.read-button a:hover {
  text-decoration: underline;
}

.book-menu {
  list-style-type: none;
  padding: 0;
}

.book-menu li {
  padding: 10px 20px;
  border-bottom: 1px solid #ccc;
  cursor: pointer;
}

.book-menu li:hover {
  background-color: #f4f4f4;
}

.book-menu li img {
  width: 80px;
  height: auto;
  margin-right: 10px;
  vertical-align: middle;
}

.book-menu li a {
  color: #333;
  text-decoration: none;
}

.book-menu li a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>

<div class="book-container">
  <div class="book-cover">
    <img src="buku/bumi.jpeg" alt="Sampul Buku">
    <div class="read-button">
      <a href="#">Baca</a>
    </div>
  </div>

  <div class="book-cover">
    <img src="buku/hujan.jpeg" alt="Sampul Buku 2">
    <div class="read-button">
      <a href="#">Baca</a>
    </div>
  </div>

  <div class="book-cover">
    <img src="buku/bintang.jpeg" alt="Sampul Buku 3">
    <div class="read-button">
      <a href="#">Baca</a>
    </div>
  </div>

  <div class="book-cover">
    <img src="buku/angin.jpeg" alt="Sampul Buku 4">
    <div class="read-button">
      <a href="#">Baca</a>
    </div>
  </div>

  <!-- Tambahkan lebih banyak sampul buku di sini jika diperlukan -->
</div>

</body>
</html>
