<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ulasan Buku</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-bottom: 8px;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #4682B4;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .submit-btn:hover {
        background-color: #5f9ea0;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Ulasan Buku</h2>
    <form action="submit_review.php" method="post">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required>

        <label for="ulasan">Ulasan:</label>
        <textarea id="ulasan" name="ulasan" rows="5" required></textarea>
        
        <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
            <option value="" disabled selected>Pilih rating</option>
            <option value="5">⭐️⭐️⭐️⭐️⭐️</option>
            <option value="4">⭐️⭐️⭐️⭐️</option>
            <option value="3">⭐️⭐️⭐️</option>
            <option value="2">⭐️⭐️</option>
            <option value="1">⭐️</option>
        </select>
        
        <input type="submit" value="Kirim Ulasan" class="submit-btn">
    </form>
</div>

</body>
</html>
