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
    <title>Formulir Kuisioner Online - e-KLiK || Survei Kepuasan Masyarakat Lingkup Kepelabuhanan PPP Bulu</title>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="kuisioner">Isi Kuisioner <span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="hasil-kuisioner">Hasil Survei</a>
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
                <h4 class="inner-text-title font-weight-bold">Formulir</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Beranda</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Survei Kepuasan Masyarakat</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    
     <section class="w3l-bottom-grids-6 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:100%;">
                <p class="text-uppercase">Formulir Survei</p>
                <h3 class="title-style">Survei <span>Kepuasan Masyarakat </span> Pelayanan Kami</h3>
            </div>
            <div class="row align-items-center">
                    <div class=" col-lg-6">
                        <form method="POST" action="./tambah_kuisioner" enctype="multipart/form-data">
                    <div class="form-group">
								<label for="contactusername"><b>Nama Anda</b></label>
								<div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
								<input type="text" class="form-control" id="contactusername" name="nama" placeholder="Nama Lengkap Anda" autofocus>
								</div>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Jenis Kelamin</b></label>
								<div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-restroom"></i></span>
                                </div>
								<select name="jk" class="form-control" id="contactusername">
								    <option>- Pilih Jenis Kelamin -</option>
								    <option value="L">Laki-Laki</option>
								    <option value="P">Perempuan</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>No HP (Whatsapp Sebagai Notifikasi Bukti)</b></label>
								<div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-whatsapp"></i></span>
                                </div>
								<input type="text" class="form-control" id="contactusername" name="hp" placeholder="085123000000">
								</div>
							</div>
							<div class="form-group">
								<label for="contactemail"><b>Pendidikan</b></label>
																<div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                                </div>
								<select name="pendidikan" class="form-control" id="contactusername">
								    <option>- Pilih Pendidikan -</option>
								    <option value="SD">Sekolah Dasar (SD)</option>
								    <option value="SMP">Sekolah Menengah Pertama (SMP)</option>
								    <option value="SMA">Sekolah Menengah Atas (SMA)</option>
								    <option value="Dp">Diploma (D.I/II/III)</option>
								    <option value="S1">Sarjana (S.1)</option>
								    <option value="S2">Pasca Sarjana (S.2)</option>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="contactcomment"><b>Asal Desa</b></label>
								<textarea class="form-control" rows="3" id="contactcomment" required name="desa" placeholder="Tulis Alamat Anda"></textarea>
							</div>
							
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 1 :</b> Bagaimana tanggapan menurut anda tentang pembangunan pelabuhan perikanan berdampak positif untuk menunjang kegiatan nelayan, memiliki manfaat yang lebih dibanding sebelumnya?</label>
								<select name="p1" class="form-control" id="contactusername">
								    <option value="4">Sangat Bermanfaat</option>
								    <option value="3">Bermanfaat</option>
								    <option value="2">Cukup Bermanfaat</option>
								    <option value="1">Kurang Bermanfaat</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 2 :</b> Bagaimana Persyaratan yang harus dipenuhi dalam pengurusan pelayanan, baik persyaratan teknis maupun administratif (Prosedur dan Waktu) di UPT Pelabuhan Perikanan Pantai Bulu?</label>
								<select name="p2" class="form-control" id="contactusername">
								    <option value="4">Sangat Baik</option>
								    <option value="3">Baik</option>
								    <option value="2">Cukup Baik</option>
								    <option value="1">Kurang Baik</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 3 :</b> Menurut Bpk/Ibu/Sdr bagaimana prosedur/tata cara pelayanan, termasuk <b>pengaduan masyarakat</b> di UPT Pelabuhan Perikanan Pantai Bulu?</label>
								<select name="p3" class="form-control" id="contactusername">
								    <option value="4">Sangat Baik</option>
								    <option value="3">Baik</option>
								    <option value="2">Cukup Baik</option>
								    <option value="1">Kurang Baik</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 4 :</b> Bagaimana <b>Jangka Waktu Pelayanan</b> yang diperlukan untuk menyelesaikan seluruh proses Pelayanan dari setiap jenis pelayanan (Sewa Lahan Bangunan, Layanan Terpadu) di UPT Pelabuhan Perikanan Pantai Bulu?
                            </label>
							<select name="p4" class="form-control" id="contactusername">
								    <option value="4">Sangat Cepat</option>
								    <option value="3">Cepat</option>
								    <option value="2">Cukup Cepat</option>
								    <option value="1">Lama</option>
								</select>
							</div>
							
                    </div>
                    <div class="col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        
                                <div class="form-group">
								<label for="contactusername"><b>Pertanyan 5 :</b>Menurut Bpk/Ibu/Sdr, bagaimana <b>kemudahan informasi (berita, dokumentasi kegiatan masyarakat)</b> yang disampaikan kepada penerima informasi publik atau masyarakat di UPT Pelabuhan Perikanan Pantai Bulu ?</label>
								<select name="p5" class="form-control" id="contactusername">
								    <option value="4">Sangat Cepat Mudah</option>
								    <option value="3">Mudah</option>
								    <option value="2">Cukup Mudah</option>
								    <option value="1">Tidak Tahu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 6 :</b>Menurut Bpk/Ibu/Sdr, bagaimana adanya POS Pelayanan Terpadu untuk nelayan di lingkup UPT Pelabuhan Perikanan Pantai Bulu. <b>Apakah sudah sesuai Prosedur (Cepat dan Biaya Gratis/Sesuai Aturan)</b> ?</label>
								<select name="p6" class="form-control" id="contactusername">
								    <option value="4">Sangat Membantu/Sangat Sesuai</option>
								    <option value="3">Membantu/Sesuai</option>
								    <option value="2">Cukup Membantu/Sesuai</option>
								    <option value="1">Kurang Membantu/Tidak Sesuai</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 7 :</b>Menurut Bpk/Ibu/sdr, bagaimana <b>Kemampuan (pengetahuan, keahlian, keterampilan, dan pengalaman)</b> para pegawai/petugas di UPT Pelabuhan Perikanan Pantai Bulu dalam pelayanan publik? </label>
								<select name="p7" class="form-control" id="contactusername">
								    <option value="4">Sangat Terampil</option>
								    <option value="3">Terampil</option>
								    <option value="2">Cukup Terampil</option>
								    <option value="1">Kurang Terampil</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 8 :</b>Bagaimana sikap petugas/pegawai di UPT Pelabuhan Perikanan Pantai Bulu dalam memberikan pelayanan? </label>
							<select name="p8" class="form-control" id="contactusername">
								    <option value="4">Sangat Ramah</option>
								    <option value="3">Ramah</option>
								    <option value="2">Cukup Ramah</option>
								    <option value="1">Kurang Ramah</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 9 :</b> Menurut Bpk/Ibu/sdr, apakah sudah memperoleh berita/informasi di berikan melalui <b>internet (seperti website, sarana media sosial Facebook, Instagram) dan Poster</b> di UPT Pelabuhan Perikanan Pantai Bulu?</label>
							<select name="p9" class="form-control" id="contactusername">
								    <option value="4">Sudah, Sangat Membantu dan Informatif</option>
								    <option value="3">Sudah, Belum pernah buka</option>
								    <option value="2">Sudah, Kurang Update</option>
								    <option value="1">Tidak Tahu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 10 :</b> Menurut Bpk/Ibu/Sdr, bagaimana <b>kemudahan penanganan pengaduan, saran dan masukan, tindak lanjutnya dan dikelola dengan Baik secara Transparan</b> di UPT Pelabuhan Perikanan Pantai Bulu? </label>
								<select name="p10" class="form-control" id="contactusername">
								    <option value="4">Dikelola Dengan Baik</option>
								    <option value="3">Respon Baik</option>
								    <option value="2">Cukup Baik</option>
								    <option value="1">Tidak ada Respon</option>
								</select>
							</div><hr>
							
							<button type="submit" name="simpan" class="btn btn-style btn-primary"><i class="fas fa-paper-plane"></i> Kirim Kuisioner Sekarang!</button>
        </div>
    </section>
    <!-- //banner bottom section -->

    

    

   
   

   <!-- footer -->
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
                    <h3 class="mt-lg-3">Logo Survei Online</h3>
                    <div class="end-column">
                    <img src="assets/images/logo_e-klik_trans.png" alt="" class="img-fluid img-responsive" />
                    </div>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                             <li><a href="#">Total Visitor <i class="fas fa-users"></i> <?php
		include ("koneksi.php");

		$sql_hitung = mysqli_query($koneksiikm, "SELECT * FROM eklik_counter");

		while($row = mysqli_fetch_array($sql_hitung)){
			$jml_sekarang = $row['counts'];
			$jml_baru = $jml_sekarang + 1;
			$update_counts = mysqli_query($koneksiikm, "UPDATE eklik_counter SET counts='$jml_baru'");
		}

	?>
	
	<?php echo $jml_baru;?> Kali</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
            </div>
             <div class="below-section text-center pt-lg-4 mt-5">
                <p class="copy-text" align="center">2019-<?php echo date("Y"); ?> <a href="//www.dmca.com/Protection/Status.aspx?ID=96801a29-7645-48f5-9a0d-717a7d426259" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=96801a29-7645-48f5-9a0d-717a7d426259"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> e-KLiK | Develop By PLKDEV | didukung oleh  oleh Tim <b>UPT Pelabuhan Perikanan Pantai Bulu</b>
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

    <!-- counter for stats -->
    <script src="https://perahulayarkertas.com/UX/SIAPGRAK/assets/js/counter.js"></script>
    <!-- //counter for stats -->

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