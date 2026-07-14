<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$nama = "Alvin Yafiq Firas";
$nim = "3337250072";
$prodi = "S1 Teknik Informatika";
?>

<div class="container">


<h1><?php echo $nama; ?></h1>

<p><b>NIM :</b> <?php echo $nim; ?></p>

<p><b>Program Studi :</b> <?php echo $prodi; ?></p>

<p>
Saya merupakan mahasiswa Teknik Informatika
yang sedang belajar Pemrograman Web.
</p>

<button id="darkmodebtn">
Dark Mode
</button>

</div>

<script src="script.js"></script>

</body>
</html>
