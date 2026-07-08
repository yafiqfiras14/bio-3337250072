<?php

$daftar=[

["nama"=>"Alvin Yafiq Firas","nim"=>"3337250072","ipk"=>3.85],
["nama"=>"Raka buming","nim"=>"3337250073","ipk"=>3.70],
["nama"=>"Den Jaka","nim"=>"3337250074","ipk"=>3.91],
["nama"=>"Citra Dewi","nim"=>"3337250075","ipk"=>2.95],
["nama"=>"Eka Wulandari","nim"=>"3337250076","ipk"=>3.55]

];

?>

<!DOCTYPE html>

<html>

<head>

<title>Daftar Mahasiswa</title>

</head>

<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10">

<tr>

<th>No</th>
<th>Nama</th>
<th>NIM</th>
<th>IPK</th>
<th>Status</th>

</tr>

<?php foreach($daftar as $i=>$mhs){ ?>

<tr>

<td><?= $i+1 ?></td>

<td><?= $mhs["nama"] ?></td>

<td><?= $mhs["nim"] ?></td>

<td><?= $mhs["ipk"] ?></td>

<td>

<?= $mhs["ipk"]>=3.75 ? "Cumlaude 🌟" : "Reguler"; ?>

</td>

</tr>

<?php } ?>

</table>

</body>

</html>
