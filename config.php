<?php

$server = "sql113.byethost11.com";
$user = "b11_32192147";
$password = "Bramono11082002";
$nama_database = "b11_32192147_data_mahasiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
else{
    echo "Jadi";
}

?>