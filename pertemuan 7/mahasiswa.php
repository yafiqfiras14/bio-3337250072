<?php

$mahasiswa = [

"nama"=>"Alvin Yafiq Firas",
"nim"=>"3337250072",
"prodi"=>"Informatika",
"ipk"=>3.85,
"skill"=>["HTML","CSS","JavaScript","PHP"]

];

echo "<h1>".$mahasiswa["nama"]."</h1>";

echo "<p>IPK : ".$mahasiswa["ipk"]."</p>";

$daftar=[

["nama"=>"Dafa","ipk"=>3.85],
["nama"=>"Raka","ipk"=>3.60],
["nama"=>"Jaka","ipk"=>3.92]

];

foreach($daftar as $mhs){

echo $mhs["nama"]." - IPK : ".$mhs["ipk"]."<br>";

}

?>
