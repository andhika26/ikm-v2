<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hasil Survei - e-KLiK || Survei Kepuasan Masyarakat Lingkup Kepelabuhanan PPP Bulu</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
     <!-- Google / Search Engine Tags -->
   <meta itemprop="name" content="e-KLiK || Survei Kepuasan Masyarakat Lingkup Kepelabuhanan PPP Bulu">
   <meta itemprop="description" content="Sistem Informasi Survei Online Kepuasan Masyarakat Lingkup Pelabuhan Perikanan Pantai Bulu">
   <meta itemprop="image" content="https://pppbulu.dkp.jatimprov.go.id/ikm/assets/images/banner1.png">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="icon" href="assets/images/logo_e-klik.png" sizes="16x16" />
<link rel="icon" href="assets/images/logo_e-klik.png" sizes="32x32" />
<link rel="icon" href="assets/images/logo_e-klik.png" sizes="48x48" />
<link rel="icon" href="assets/images/logo_e-klik.png" sizes="192x192" />
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="./">
                        <span>e-</span>KLiK</a>
                </h1>
                <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                         <li class="nav-item ">
                            <a class="nav-link" href="./">Beranda </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tentang-kami">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kuisioner">Isi Kuisioner</a>
                        </li>
                         <li class="nav-item active">
                            <a class="nav-link" href="hasil-kuisioner">Hasil Survei <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak-kami">Kontak Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://drive.google.com/file/d/1Ji8kQzVyAX6haLr4sPlakGlJGZHyKytU/view?usp=drive_link" target="_blank"><button class="btn btn-sm btn-primary">Panduan</button></a>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position mt-lg-2">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold">Hasil Perhitungan Survei IKM</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="./">Beranda</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Hasil Survei</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- banner bottom section -->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-md-5 py-4">
            
            <div class="row align-items-center">
                    <div class=" col-lg-6">
                        <img src="assets/images/ab1.png" alt="" class="img-fluid">
                    </div>
                    
                    <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <div class="title-main text-center mx-auto mb-5" style="max-width:100%;">
                <h3 class="title-style">Berdasarkan <span>Perhitungan </span> RealTime </h3>
            </div>
                        
                        <?php
                        include ("koneksi.php");
$tahun2 = date('Y');
//$tahun2 = 2021;
$tahun1 = $tahun2-1;


//DATA BANDING TAHUN BERIKUTNYA

//ambil data koresponden
$hitungthlalu = $koneksiikm->query("SELECT koresponden FROM koresponden WHERE tahun='$tahun1'") or die (mysqli_error());
$r1 = mysqli_fetch_array($hitungthlalu);
//echo "Jumlah Koresponden = ".$r1[0]." Orang <br>";

//ambil data koresponden
$hitung12thlalu = $koneksiikm->query("SELECT batas FROM bataskonversi WHERE tahun='$tahun1'") or die (mysqli_error());
$r22 = mysqli_fetch_array($hitung12thlalu);
//echo "Batas Konversi = ".$r22[0]." Orang <br>";

$query1 = $koneksiikm->query("SELECT SUM(r1),SUM(r2),SUM(r3),SUM(r4),SUM(r5),SUM(r6),SUM(r7),SUM(r8),SUM(r9),SUM(r10),COUNT(id) FROM formulaikm WHERE tahun='$tahun1'") or die (mysqli_error());		
if(mysqli_num_rows($query1) == 0){
	echo "<br><font color='red'><br><b>Pencarian Data Tidak Ditemukan</b></font>";
		}else{
	$rr1 = mysqli_fetch_array($query1);  
//echo "Jumlah Koresponden Masuk = ".$jumlah1 = $rr1[10]." Orang <br>";
$sisa1 = $r1[0] - $rr1[10];
//echo "Jumlah Koresponden Sisa = ".$sisa." Orang <br>";
$hitbobot = ($r1[0]/10)-1;
$bobot = 1/$hitbobot;
//echo "Bobot Formulasi : ".$bobot."<br><br>";
$kategori1 = ((($rr1[0]/$rr1[10])*$bobot)+(($rr1[1]/$rr1[10])*$bobot)+(($rr1[2]/$rr1[10])*$bobot)+(($rr1[3]/$rr1[10])*$bobot)+(($rr1[4]/$rr1[10])*$bobot)+(($rr1[5]/$rr1[10])*$bobot)+(($rr1[6]/$rr1[10])*$bobot)+(($rr1[7]/$rr1[10])*$bobot)+(($rr1[8]/$rr1[10])*$bobot)+(($rr1[9]/$rr1[10])*$bobot))*$r22[0];
}

//ambil data koresponden
$hitung = $koneksiikm->query("SELECT koresponden FROM koresponden WHERE tahun='$tahun2'") or die (mysqli_error());
$r = mysqli_fetch_array($hitung);
echo "Jumlah Koresponden = ".$r[0]." Orang <br>";

//ambil data koresponden
$hitung11 = $koneksiikm->query("SELECT batas FROM bataskonversi WHERE tahun='$tahun2'") or die (mysqli_error());
$r2 = mysqli_fetch_array($hitung11);
echo "Batas Konversi = ".$r2[0]." Orang <br>";
	
//ambil data koresponden
$query = $koneksiikm->query("SELECT SUM(r1),SUM(r2),SUM(r3),SUM(r4),SUM(r5),SUM(r6),SUM(r7),SUM(r8),SUM(r9),SUM(r10),COUNT(id) FROM formulaikm WHERE tahun='$tahun2'") or die (mysqli_error());		
if(mysqli_num_rows($query) == 0){
	echo "<br><font color='red'><br><b>Pencarian Data Tidak Ditemukan</b></font>";
		}else{
	$rr = mysqli_fetch_array($query);  
echo "Jumlah Koresponden Masuk = ".$jumlah = $rr[10]." Orang <br>";
$sisa = $r[0] - $rr[10];
//echo "Jumlah Koresponden Sisa = ".$sisa." Orang <br>";
$hitbobot = ($r[0]/10)-1;
$bobot = 1/$hitbobot;
echo "Bobot Formulasi : ".$bobot."<br><br>";
$kategori = ((($rr[0]/$rr[10])*$bobot)+(($rr[1]/$rr[10])*$bobot)+(($rr[2]/$rr[10])*$bobot)+(($rr[3]/$rr[10])*$bobot)+(($rr[4]/$rr[10])*$bobot)+(($rr[5]/$rr[10])*$bobot)+(($rr[6]/$rr[10])*$bobot)+(($rr[7]/$rr[10])*$bobot)+(($rr[8]/$rr[10])*$bobot)+(($rr[9]/$rr[10])*$bobot))*$r2[0];
?>

</td></tr>			
<tr>
    <td><b>Perhitungan Rentang Nilai Sesuai PermenPAN RB Nomor 14 Tahun 2017</b></td>
</tr>
</table>
<br><br>
<table border="1" width="100%" style="font-family:'Arial'; line-height:1.6;">
    <tr><td align="center"><b>Uraian</b></td><td align="center"><b>Capaian <?php echo $tahun2; ?></b></td><td align="center"><b>Capaian <?php echo $tahun1; ?></b></td><td align="center"><b>Status<br>Capaian</b></td></tr>
    <tr><td>(U1) 1.Sarana Prasarana Pelabuhan :</td><td align="center"><?php echo number_format((($rr[0]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[0]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[0]/$rr[10]))*$r2[0]-(($rr1[0]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U2) 2.Persyaratan Administratif :</td><td align="center"><?php echo number_format((($rr[1]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[1]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[1]/$rr[10]))*$r2[0]-(($rr1[1]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U3) 3.Prosedur (SOP) :</td><td align="center"><?php echo number_format((($rr[2]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[2]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[2]/$rr[10]))*$r2[0]-(($rr1[2]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U4) 4.Waktu Pelayanan Administratif:</td><td align="center"><?php echo number_format((($rr[3]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[3]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[3]/$rr[10]))*$r2[0]-(($rr1[3]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U5) 5.Transparansi Informasi Publik :</td><td align="center"><?php echo number_format((($rr[4]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[4]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[4]/$rr[10]))*$r2[0]-(($rr1[4]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U6) 6.Biaya / Pos Layanan Terpadu :</td><td align="center"><?php echo number_format((($rr[5]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[5]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[5]/$rr[10]))*$r2[0]-(($rr1[5]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U7) 7.Kompetensi Pelaksana/ASN : </td><td align="center"><?php echo number_format((($rr[6]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[6]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[6]/$rr[10]))*$r2[0]-(($rr1[6]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U8) 8.Perilaku Pelaksana/ASN : </td><td align="center"><?php echo number_format((($rr[7]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[7]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[7]/$rr[10]))*$r2[0]-(($rr1[7]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U9) 9.Sistem Informasi, Statistik, dan Kesyahbandaran :</td><td align="center"><?php echo number_format((($rr[8]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[8]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[8]/$rr[10]))*$r2[0]-(($rr1[8]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>(U10) 10.Respon Pengaduan dan Tanggapan :</td><td align="center"><?php echo number_format((($rr[9]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[9]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[9]/$rr[10]))*$r2[0]-(($rr1[9]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "<font color='red'>&#9660;".number_format($n,2)."</font>"; } ?></td></tr>
     <tr><td><b>Jumlah IKM</b></td><td align="center"><b><?php echo number_format($kategori,2);?></b></td><td align="center"><b><?php echo number_format($kategori1,2);?></b></td><td bgcolor="white"></td></tr>
</table>



            </div>
        </div>
                <br><br><h5 class="inner-text-title font-weight-bold">Penjabaran Hasil Perhitungan Survei IKM Sesuai Kuisioner</h5><br>


<table border="1" width="100%" style="font-family:'Arial'; line-height:1.6;">
    <tr><td align="center"><b>Uraian Indikator / Pertanyaan</b></td><td align="center"><b>Capaian <?php echo $tahun2; ?></b></td><td align="center"><b>Capaian <?php echo $tahun1; ?></b></td><td align="center"><b>IK</b></td></tr>
    <tr><td>Bagaimana tanggapan menurut anda tentang pembangunan pelabuhan perikanan berdampak positif untuk menunjang kegiatan nelayan, memiliki manfaat yang lebih dibanding sebelumnya?</td><td align="center"><?php echo number_format((($rr[0]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[0]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[0]/$rr[10]))*$r2[0]-(($rr1[0]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Bagaimana Persyaratan yang harus dipenuhi dalam pengurusan pelayanan, baik persyaratan teknis maupun administratif (Prosedur dan Waktu) di UPT Pelabuhan Perikanan Pantai Bulu?</td><td align="center"><?php echo number_format((($rr[1]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[1]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[1]/$rr[10]))*$r2[0]-(($rr1[1]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Menurut Bpk/Ibu/Sdr bagaimana prosedur/tata cara pelayanan, termasuk pengaduan masyarakat di UPT Pelabuhan Perikanan Pantai Bulu?</td><td align="center"><?php echo number_format((($rr[2]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[2]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[2]/$rr[10]))*$r2[0]-(($rr1[2]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Bagaimana Jangka Waktu Pelayanan yang diperlukan untuk menyelesaikan seluruh proses Pelayanan dari setiap jenis pelayanan (Sewa Lahan Bangunan, Layanan Terpadu) di UPT Pelabuhan Perikanan Pantai Bulu?</td><td align="center"><?php echo number_format((($rr[3]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[3]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[3]/$rr[10]))*$r2[0]-(($rr1[3]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Menurut Bpk/Ibu/Sdr, bagaimana kemudahan informasi (berita, dokumentasi kegiatan masyarakat) yang disampaikan kepada penerima informasi publik atau masyarakat di UPT Pelabuhan Perikanan Pantai Bulu ?</td><td align="center"><?php echo number_format((($rr[4]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[4]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[4]/$rr[10]))*$r2[0]-(($rr1[4]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Menurut Bpk/Ibu/Sdr, bagaimana adanya POS Pelayanan Terpadu untuk nelayan di lingkup UPT Pelabuhan Perikanan Pantai Bulu. Apakah sudah sesuai Prosedur (Cepat dan Biaya Gratis/Sesuai Aturan) ?</td><td align="center"><?php echo number_format((($rr[5]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[5]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[5]/$rr[10]))*$r2[0]-(($rr1[5]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Menurut Bpk/Ibu/sdr, bagaimana Kemampuan (pengetahuan, keahlian, keterampilan, dan pengalaman) para pegawai/petugas di UPT Pelabuhan Perikanan Pantai Bulu dalam pelayanan publik?</td><td align="center"><?php echo number_format((($rr[6]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[6]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[6]/$rr[10]))*$r2[0]-(($rr1[6]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Bagaimana sikap petugas/pegawai di UPT Pelabuhan Perikanan Pantai Bulu dalam memberikan pelayanan?</td><td align="center"><?php echo number_format((($rr[7]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[7]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[7]/$rr[10]))*$r2[0]-(($rr1[7]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Menurut Bpk/Ibu/sdr, apakah sudah memperoleh berita/informasi di berikan melalui internet (seperti website, sarana media sosial Facebook, Instagram) dan Poster di UPT Pelabuhan Perikanan Pantai Bulu?</td><td align="center"><?php echo number_format((($rr[8]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[8]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[8]/$rr[10]))*$r2[0]-(($rr1[8]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
    <tr><td>Menurut Bpk/Ibu/Sdr, bagaimana kemudahan penanganan pengaduan, saran dan masukan, serta tindak lanjutnya di UPT Pelabuhan Perikanan Pantai Bulu?</td><td align="center"><?php echo number_format((($rr[9]/$rr[10]))*$r2[0],2);?></td><td align="center"><?php echo number_format((($rr1[9]/$rr1[10]))*$r22[0],2);?></td><td><?php $n=((($rr[9]/$rr[10]))*$r2[0]-(($rr1[9]/$rr1[10]))*$r22[0]); if($n>=0){ echo "&#9650;".number_format($n,2); }else{ echo "&#9660;<font color='red'>".number_format($n,2)."</font>"; } ?></td></tr>
     <tr><td><b>Jumlah IKM</b></td><td align="center"><b><?php echo number_format($kategori,2);?></b></td><td align="center"><b><?php echo number_format($kategori1,2);?></b></td></tr>
</table>
    
   
    </section> 
    
    <?php
}
?>

    <footer class="w3l-footer-16 py-5">
        <div class="container pt-md-4">
            <div class="row footer-p">
                <div class="col-lg-4 pr-lg-5">
                    <a class="footer-logo" href="index.html">
                        <span>e-</span>KLiK</a>
                    <p class="mt-3">Survei Kepuasan Masyarakat Online merupakan Data diatas menunjukan capaian Nilai IKM yang diperoleh dari hasil kuisioner <?php echo $rr[10] ?> Responden secara realtime. Jumlah sasaran responden acak sekitar 110 Responden Setiap Tahun.</p>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li><a href="#github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-xl-5 col-6 column">
                            <h3 class="mt-lg-3">Quick Link</h3>
                            <ul class="footer-gd-16">
                                <li><a href="about.html">Beranda</a></li>
                                <li><a href="#clients">Form Survei</a></li>
                                <li><a href="services.html">Peraturan</a></li>
                                <li><a href="#blog">Laporan</a></li>
                                <li><a href="contact.html">Kontak Kami</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-6 column pl-lg-0">
                            <h3 class="mt-lg-3">Kontak Kami</h3>
                            <ul class="footer-contact-list">
                                <li class="">Jl. Raya Tuban-Semarang Km.45 Bulumeduro, Bancar, Tuban 62354</li>
                                <li class="mt-2"><a href="tel:+62356 411024">+62356 411024</a></li>
                                <li class="mt-2"><a href="mailto:ppi.bulu@gmail.com">ppi.bulu@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 col-sm-8 column mt-lg-0 mt-4 pl-xl-0">
                    <h3 class="mt-lg-3">Newsletter </h3>
                    <div class="end-column">
                        <form action="#" class="subscribe" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a href="#">Total <i class="fas fa-users"></i> <?php
$filename = 'IKMCOUNTER.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();	

$jum = file_get_contents($filename);

require ("koneksi.php");
$data = mysqli_query($koneksiikm,"SELECT * FROM webcounter WHERE data='IKMCOUNTER.txt'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$r = mysqli_fetch_array($data);
$data1 = mysqli_query($koneksiikm,"SELECT * FROM webcounter WHERE data='IKMCOUNTER1.txt'");
// menghitung jumlah data yang ditemukan
$cek1 = mysqli_num_rows($data1);
$r1 = mysqli_fetch_array($data1);
$hitung = $r['data'];
$stat = $r['jumlah'];
$stat1 = $r1['jumlah'];

if ($hitung == $filename){
    $diperbaharui = date("d-m-Y H:i:s");
    mysqli_query($koneksiikm,"UPDATE webcounter SET jumlah='$jum', updated='$diperbaharui' WHERE data='$filename'");
} else {
     $idz = date("dmYHis");
     $diperbaharui = date("d-m-Y H:i:s");
     mysqli_query($koneksiikm,"INSERT INTO webcounter VALUES ('$idz','$filename','$jum','$diperbaharui','SKM')");
}

 
echo $stat+$stat1." Visitor";	
?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            </div>
             <div class="below-section text-center pt-lg-4 mt-5">
                <p class="copy-text" align="center">2019-<?php echo date("Y"); ?> <a href="//www.dmca.com/Protection/Status.aspx?ID=96801a29-7645-48f5-9a0d-717a7d426259" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=96801a29-7645-48f5-9a0d-717a7d426259"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>e-KLiK | Develop By PLKDEV | didukung oleh Tim <b>UPT Pelabuhan Perikanan Pantai Bulu</b>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="https://perahulayarkertas.com/UX/SIAPGRAK/assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="https://perahulayarkertas.com/UX/SIAPGRAK/assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
<script>
        document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
 
 
 $(function() {
    $(this).bind("contextmenu", function(e) {
       e.preventDefault();
    });
 });
    </script>
    <!--bootstrap-->
    <script src="https://perahulayarkertas.com/UX/SIAPGRAK/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>