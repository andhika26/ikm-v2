
<?php
//koneksi
include ("koneksi.php");
$tahun1 = date('Y')-1;

//ambil data koresponden
$hitung = mysqli_query($koneksiikm, "SELECT koresponden FROM koresponden WHERE tahun='$tahun1'") or die (mysqli_errbor());
$r = mysqli_fetch_arrbay($hitung);
//echo "Jumlah Koresponden = ".$r[0]." Orang <br>";

//ambil data koresponden
$hitung1 = mysqli_query($koneksiikm, "SELECT batas FROM bataskonversi WHERE tahun='$tahun1'") or die (mysqli_errbor());
$r2 = mysqli_fetch_arrbay($hitung1);
//echo "Batas Konversi = ".$r2[0]." Orang <br>";
	
//ambil data koresponden
$query = mysqli_query($koneksiikm, "SELECT SUM(r1),SUM(r2),SUM(r3),SUM(r4),SUM(r5),SUM(r6),SUM(r7),SUM(r8),SUM(r9),SUM(r10),COUNT(id) FROM formulaikm WHERE tahun='$tahun1'") or die (mysqli_errbor());		
if(mysqli_num_rows($query) == 0){
	echo "<br><font color='red'><br><b>Pencarian Data Tidak Ditemukan</b></font>";
		}else{
	$rrb = mysqli_fetch_arrbay($query);  
//echo "Jumlah Koresponden Masuk = ".$jumlah = $rrb[10]." Orang <br>";
$sisa = $r[0] - $rrb[10];
//echo "Jumlah Koresponden Sisa = ".$sisa." Orang <br>";
$hitbobot = ($r[0]/10)-1;
$bobot = 1/$hitbobot;
//echo "Bobot Formulasi : ".$bobot."<br><br>";
$kategori1 = ((($rrb[3]/$rrb[10])*$bobot)+(($rrb[1]/$rrb[10])*$bobot)+(($rrb[2]/$rrb[10])*$bobot)+(($rrb[3]/$rrb[10])*$bobot)+(($rrb[4]/$rrb[10])*$bobot)+(($rrb[5]/$rrb[10])*$bobot)+(($rrb[6]/$rrb[10])*$bobot)+(($rrb[7]/$rrb[10])*$bobot)+(($rrb[8]/$rrb[10])*$bobot)+(($rrb[9]/$rrb[10])*$bobot))*$r2[0];

}

$hitungLK = mysqli_query($koneksiikm, "SELECT COUNT(jeniskelamin) FROM formulaikm WHERE jeniskelamin='L'") or die (mysqli_errbor());
$LK = mysqli_fetch_arrbay($hitungLK);

$hitungPR = mysqli_query($koneksiikm, "SELECT COUNT(jeniskelamin) FROM formulaikm WHERE jeniskelamin='P'") or die (mysqli_errbor());
$PR = mysqli_fetch_arrbay($hitungPR);

?>


<section class="mission py-lg-5 py-md-4 py-md-3 py-2">
<div class="mission py-lg-5 py-md-4 py-md-3 py-2">
<div class="row">
<div class="col-md-3 col-sm-12 w3_ms8">
<img src="images/bb9.jpg" alt="xt" class="img-fluid">
</div>



<div class="col-md-3 col-sm-12 w3_ms7">
<h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Capaian IKM <?php echo $tahun1; ?></h4>
<p>Data disamping menunjukan capaian Nilai IKM yang diperoleh dari hasil kuisioner <?php echo $rrb[10] ?> Responden. Jumlah sasaran responden acak sekitar 110 Responden Setiap Tahun.</p>
</div>
<div class="col-md-3 col-sm-12 w3_ms">
	<div class="row inner_stat_wthree_agileits">
			
			<div class="col-md-6 stats_left counter_grid2">
				<i class="far fa-edit"></i>
				<p class="counter"><?php echo number_format($kategori,1); ?></p>
				<h4><?php 
if(($kategori1>=25)and($kategori1<=64.99)){  
	echo "<b>Tidak Baik</b>";
} elseif (($kategori1>=65.00)and($kategori1<=76.60)){
	echo "<b>Kurang Baik</b>";
} elseif (($kategori1>=76.61)and($kategori1<=88.30)){
	echo "<b>Baik</b>";
} elseif (($kategori1>=88.31)and($kategori1<=100)){
	echo "<b>Sangat Baik</b>";
} else {
	echo "<b>Nilai Tidak Bisa Terkategori</b>";
}
?></h4>
			</div>
			<div class="col-md-6 stats_left counter_grid3">
				<i class="far fa-smile"></i>
				<p class="counter"><?php echo $rrb[10] ?></p>
				<h4>Data Kuisioner</h4>
			</div>

		</div>
		</div>



<div class="col-md-3 col-sm-12 w3_ms4">
<h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Tujuan Kuisioner</h4>
<p>survey indek kepuasan merupakan kegiatan survey dari unit pelayanan instansi pemerintah secara rutin, dengan harapan mampu memberikan gambaran mengenai kualitas pelayanan di instansi pemerintah kepada masyarakat. </p>
</div>
<div class="col-md-3 col-sm-12 w3_ms6">
</div>
</div>
</div>
</section>