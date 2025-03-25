<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form PHP</title>
</head>
<body>
    <form method="POST">
        <label>Masukkan nama: </label>
        <input type="text" name="nama" required>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nama = $_POST["nama"];
        echo "<p> Halo, $nama!</p>";
    } 
    ?>
</body>
</html>