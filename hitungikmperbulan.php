<table border="1" width="100%">
<?php
//koneksi
include ("koneksi.php");
//$tahun = date('Y');
$tahun2 = 2022;
$tanggalawal = $_POST["awal"];
$tanggalakhir = $_POST["akhir"];

echo "<center><h3>HASIL IKM PPP BULU TAHUN ".$tahun2." DENGAN E-KLIK<br>PERIODE : ".$tanggalawal."-".$tanggalakhir."</h3></center>";

//ambil data koresponden
$hitung = mysqli_query($koneksiikm, "SELECT koresponden FROM koresponden WHERE tahun='$tahun2'") or die (mysqli_error());
$r = mysqli_fetch_array($hitung);
echo "Jumlah Koresponden = ".$r[0]." Orang <br>";

//ambil data koresponden
$hitung11 = mysqli_query($koneksiikm, "SELECT batas FROM bataskonversi WHERE tahun='$tahun2'") or die (mysqli_error());
$r2 = mysqli_fetch_array($hitung11);
echo "Batas Konversi = ".$r2[0]." Orang <br>";
	
//ambil data koresponden
$query = mysqli_query($koneksiikm, "SELECT SUM(r1),SUM(r2),SUM(r3),SUM(r4),SUM(r5),SUM(r6),SUM(r7),SUM(r8),SUM(r9),SUM(r10),COUNT(id) FROM formulaikm WHERE tanggal BETWEEN '$tanggalawal' AND '$tanggalakhir'") or die (mysqli_error());		
if(mysqli_num_rows($query) == 0){
	echo "<br><font color='red'><br><b>Pencarian Data Tidak Ditemukan</b></font>";
		}else{
	$rr = mysqli_fetch_array($query);  
echo "Jumlah Koresponden Masuk = ".$jumlah = $rr[10]." Orang <br>";
$sisa = $r[0] - $rr[10];

echo "Jumlah Koresponden Sisa = ".$sisa." Orang <br>";
$hitbobot = ($r[0]/10)-1;
$bobot = 1/$hitbobot;
echo "Bobot Formulasi : ".$bobot."<br><br>";
$kategori = ((($rr[0]/$rr[10])*$bobot)+(($rr[1]/$rr[10])*$bobot)+(($rr[2]/$rr[10])*$bobot)+(($rr[3]/$rr[10])*$bobot)+(($rr[4]/$rr[10])*$bobot)+(($rr[5]/$rr[10])*$bobot)+(($rr[6]/$rr[10])*$bobot)+(($rr[7]/$rr[10])*$bobot)+(($rr[8]/$rr[10])*$bobot)+(($rr[9]/$rr[10])*$bobot))*$r2[0];
?>
<tr align="center"><td>JUMLAH</td><td><?php echo $rr[0];?></td><td><?php echo $rr[1]?></td><td><?php echo $rr[2]?></td><td><?php echo $rr[3]?></td><td><?php echo $rr[4]?></td><td><?php echo $rr[5]?></td><td><?php echo $rr[6]?></td><td><?php echo $rr[7]?></td><td><?php echo $rr[8]?></td><td><?php echo $rr[9]?></td><td rowspan="5"><font size="15"><b><?php echo number_format($kategori,2); ?></b></font></td></tr>

<tr align="center"><td>NR</td><td><?php echo number_format($rr[0]/$rr[10],2);?></td><td><?php echo number_format($rr[1]/$rr[10],2);?></td><td><?php echo number_format($rr[2]/$rr[10],2);?></td><td><?php echo number_format($rr[3]/$rr[10],2);?></td><td><?php echo number_format($rr[4]/$rr[10],2);?></td><td><?php echo number_format($rr[5]/$rr[10],2);?></td><td><?php echo number_format($rr[6]/$rr[10],2);?></td><td><?php echo number_format($rr[7]/$rr[10],2);?></td><td><?php echo number_format($rr[8]/$rr[10],2);?></td><td><?php echo number_format($rr[9]/$rr[10],2);?></td></tr>

<tr align="center"><td>NR x Bobot</td><td><?php echo number_format(($rr[0]/$rr[10])*$bobot,2); ?></td><td><?php echo number_format(($rr[1]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[2]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[3]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[4]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[5]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[6]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[7]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[8]/$rr[10])*$bobot,2);?></td><td><?php echo number_format(($rr[9]/$rr[10])*$bobot,2);?></td></tr>

<tr><td>Nilai Indeks</td><td colspan="10"><?php echo number_format(((($rr[0]/$rr[10])*$bobot)+(($rr[1]/$rr[10])*$bobot)+(($rr[2]/$rr[10])*$bobot)+(($rr[3]/$rr[10])*$bobot)+(($rr[4]/$rr[10])*$bobot)+(($rr[5]/$rr[10])*$bobot)+(($rr[6]/$rr[10])*$bobot)+(($rr[7]/$rr[10])*$bobot)+(($rr[8]/$rr[10])*$bobot)+(($rr[9]/$rr[10])*$bobot))*$r2[0],2); ?></td></tr>	
<tr><td>Kategori</td>
<td colspan="10">
<?php 
if(($kategori>=25)and($kategori<=64.99)){  
	echo "<b>Tidak Baik</b>";
} elseif (($kategori>=65.00)and($kategori<=76.60)){
	echo "<b>Kurang Baik</b>";
} elseif (($kategori>=76.61)and($kategori<=88.30)){
	echo "<b>Baik</b>";
} elseif (($kategori>=88.31)and($kategori<=100)){
	echo "<b>Sangat Baik</b>";
} else {
	echo "<b>Nilai Tidak Bisa Terkategori</b>";
}
?>
</td></tr>			

</table>
<br>
<table border="1" width="100%">
    <tr><td align="center"><b>Uraian</b></td><td align="center"><b>Capaian <?php echo $tahun2; ?></b></td></tr>
    <tr><td>(U)1 1.Sarana Prasarana Pelabuhan :</td><td align="center"><?php echo number_format((($rr[0]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)2 2.Persyaratan Administratif :</td><td align="center"><?php echo number_format((($rr[1]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)3 3.Prosedur (SOP) :</td><td align="center"><?php echo number_format((($rr[2]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)4 4.Waktu Pelayanan Administratif:</td><td align="center"><?php echo number_format((($rr[3]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)5 5.Transparansi Informasi Publik :</td><td align="center"><?php echo number_format((($rr[4]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)6 6.Pos Layanan Terpadu :</td><td align="center"><?php echo number_format((($rr[5]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)7 7.Kompetensi Pelaksana/ASN : </td><td align="center"><?php echo number_format((($rr[6]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)8 8.Perilaku Pelaksana/ASN : </td><td align="center"><?php echo number_format((($rr[7]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)9 9.Sistem Informasi, Statistik, dan Kesyahbandaran :</td><td align="center"><?php echo number_format((($rr[8]/$rr[10]))*$r2[0],2);?></td></tr>
    <tr><td>(U)10 10.Respon Pengaduan dan Tanggapan :</td><td align="center"><?php echo number_format((($rr[9]/$rr[10]))*$r2[0],2);?></td></tr>
     <tr><td><b>Jumlah IKM</b></td><td align="center"><b><?php echo number_format($kategori,2);?></b></td></tr>
</table>

<?php
}
?>