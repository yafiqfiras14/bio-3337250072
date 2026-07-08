<?php

$mahasiswa = [
    "nama" => "Alvin Yafiq Firas",
    "nim" => "3337250072",
    "prodi" => "Informatika",
    "angkatan" => 2025,
    "ipk" => 3.85,
    "email" => "yafiqfiras0@gmail.com",
    "github" => "https://github.com/yafiqfiras14",
    "skill" => ["HTML", "CSS", "JavaScript", "PHP", "Git"],
    "bio" => "Saya adalah mahasiswa Informatika Fakultas Teknik UNTIRTA angkatan 2025. Saya senang mempelajari dunia web development dan terus mengembangkan kemampuan dalam HTML, CSS, JavaScript, PHP, serta Git."
];

function badgeStatus($ipk){
    if($ipk >= 3.75){
        return "Cumlaude 🌟";
    }elseif($ipk >= 3.00){
        return "Sangat Memuaskan";
    }else{
        return "Memuaskan";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Mahasiswa</title>

<style>

body{
    font-family:Arial, sans-serif;
    background:#f4f4f4;
    margin:0;
}

.container{
    width:700px;
    margin:30px auto;
}

header{
    background:#065A82;
    color:white;
    text-align:center;
    padding:30px;
    border-radius:10px;
}

.badge{
    background:#21B0A7;
    padding:8px 15px;
    border-radius:20px;
}

section{
    background:white;
    padding:20px;
    margin-top:20px;
    border-radius:10px;
}

.skill{
    display:inline-block;
    background:#065A82;
    color:white;
    padding:8px 15px;
    border-radius:20px;
    margin:5px;
}

a{
    text-decoration:none;
    color:#065A82;
}

</style>

</head>
<body>

<div class="container">

<header>

<h1><?= $mahasiswa["nama"]; ?></h1>

<p>
<?= $mahasiswa["prodi"]; ?>
|
Angkatan <?= $mahasiswa["angkatan"]; ?>
</p>

<span class="badge">
<?= badgeStatus($mahasiswa["ipk"]); ?>
</span>

</header>

<section>

<h2>Tentang Saya</h2>

<p><?= $mahasiswa["bio"]; ?></p>

<p><b>NIM :</b> <?= $mahasiswa["nim"]; ?></p>

<p><b>IPK :</b> <?= $mahasiswa["ipk"]; ?></p>

<p><b>Email :</b> <?= $mahasiswa["email"]; ?></p>

<p>
<b>GitHub :</b>
<a href="<?= $mahasiswa["github"]; ?>" target="_blank">
<?= $mahasiswa["github"]; ?>
</a>
</p>

</section>

<section>

<h2>Skill</h2>

<?php foreach($mahasiswa["skill"] as $skill){ ?>

<span class="skill">
<?= $skill; ?>
</span>

<?php } ?>

</section>

<section>

<h2>Status Akademik</h2>

<?php

if($mahasiswa["ipk"] >= 3.75){
    echo "<p style='color:green'><b>Selamat! Anda meraih predikat Cumlaude 🎉</b></p>";
}elseif($mahasiswa["ipk"] >= 3){
    echo "<p>Predikat Sangat Memuaskan</p>";
}else{
    echo "<p>Predikat Memuaskan</p>";
}

?>

</section>

</div>

</body>
</html>
