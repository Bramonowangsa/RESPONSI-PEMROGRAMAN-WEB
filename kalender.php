<?php
//mengambil tanggal system saat ini(1-31)
$hari=date("d");
//mengambil bulan system saat ini(1-12)
$bulan=date("m");
//mengambil tahun sistem saat ini
$tahun=date("Y");
//mecari jumlah hari bulan dan tahun ini
$jumlah_hari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>
<br><br>
<?php
switch ($bulan){
    case 1:$nmbulan="Jan";break;
    case 2:$nmbulan="Feb";break;
    case 3:$nmbulan="Mar";break;
    case 4:$nmbulan="Apr";break;
    case 5:$nmbulan="May";break;
    case 6:$nmbulan="Jun";break;
    case 7:$nmbulan="Jul";break;
    case 8:$nmbulan="Agu";break;
    case 9:$nmbulan="Sep";break;
    case 10:$nmbulan="Oct";break;
    case 11:$nmbulan="Nov";break;
    case 12:$nmbulan="Dec";break;
}
echo "<center><h1>$nmbulan $tahun</h1></center>";
?>
<br>
<table style="border:2px solid #1E90FF" align="center" cellpadding="10">
<tr bgcolor="#ADD8E6">
    <td align=center><font color="#FF0000">Min</font></td>
    <td align=center>Sen</td>
    <td align=center>Sel</td>
    <td align=center>Rab</td>
    <td align=center>Kam</td>
    <td align=center>Jum</td>
    <td align=center>Sab</td>
</tr>

<?php
echo "<table border='2px' solid #1E90FF align='center' cellpadding='14' cellspacing='1'>";
$s=date("w",mktime(0,0,0,$bulan,1,$tahun));
for($ds=1;$ds<=$s;$ds++){
    echo"<td></td>";
}

for($d=1;$d<=$jumlah_hari;$d++){
    //jika minggu ke 0 maka buat baris baru
    if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==0){
        echo"<tr>";
    }

    $warna="#000000";//warna default

    //jika hari minggu maka beri warna merah
    if(date("1",mktime(0,0,0,$bulan,$d,$tahun))=="sunday"){
        $warna="#FF0000";
    }

    //beri warna default tanggal tiap harinya (selain hari minggu)
    echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";

    //jika hari ke enam ,akhiri baris
    if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==6){
        echo"</tr>";
    }
}
echo "</table>";
echo "</table>";

?>
<h1><center><a href=index.html>Beranda</a></center></h1>