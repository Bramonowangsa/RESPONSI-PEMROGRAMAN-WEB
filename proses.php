<?php
    $tanggal= date("d-m-Y");
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];

    echo "<head><title>My Guest Book</title></head>";
    $fp=fopen("tugasakhir.txt", "a+");
    fputs($fp,"$tanggal|$nama|$alamat|$email|$status\n");
    fclose($fp);

    echo "Terima Kasih Atas Partisipasi Anda Mengisi Data Diri<br>";
    echo "<a href=index.html>Isi Data Diri </a><br>";
    echo "<a href=tugas_akhir.php>Lihat Data Diri </a><br>";
?>