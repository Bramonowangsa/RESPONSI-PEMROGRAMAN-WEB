<?php
     echo "<head><title>My Guest Book</title></head>";
     $fp=fopen("tugasakhir.txt", "r");

     echo "<center><h1>Table Data Diri</h1><br><br>";
     echo "<table border=1 width=100% style=text-align:center>";
     echo "<tr><td>Tanggal</td><td>Nama</td><td>alamat</td><td>Email</td><td>Prodi</td></tr>";

     while ($isi = fgets($fp)) 
     {
        $pisah = explode('|', $isi);
        echo "<tr>";
        echo "<td>$pisah[0] </td>";
        echo "<td>$pisah[1] </td>";
        echo "<td>$pisah[2] </td>";
        echo "<td>$pisah[3] </td>";
        echo "<td>$pisah[4] </td>";
        echo "</tr>";
    }
     echo "</table></center><br><br>";
     echo "<h2><center><a href=index.html> Beranda </a></center></h2>";

?>