<?php
// dibawah adalah keterangan echo
// echo "Hallo ayu";

// Benar
// $nama1 = "Ayu";
// salah
// $1satu = "Ayu";

// $hello = "Hwllo";
// echo $hell0."<br/>";
// print $hello."<br/>";
// print_r ($hello)."<br/>";
// var_dump ($hello)."<br/>";


// string
// $sapa = "Selamat pagi";
// $hello = "Hello";

// echo $sapa.$hello;
// echo $hello;
// echo"<br/>";
// echo strlen($sapa);
// echo strcmp($sapa, $hello);
// echo strtoupper($sapa);
// echo strtolower($sapa);
// echo strpos($sapa, "pagi");
// echo str_word_count($sapa);
// echo substr($sapa,2, 4)


// ARRAY 

// $siswa = array ("ayu", "widiya", "Ningrum");
// print_r($siswa);
// echo $siswa[1];
// $siswa[]="bandi";
// array_push($siswa, "ahmad", "andi");
// echo count($siswa);

// $siswa = [
//     "nama" => "ayu",
//     "umur" => 20,
//     "prodi" => "ti",
// ];
// print_r($siswa);
// echo $siswa["nama"];

$siswa = array (
    array("melati", "ayu"),
    array("yozi", "budi")
);
echo "<pre>";
print_r($siswa);
echo "</pre>";




?>