<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-KLIK | Survei Kepuasan Masyarkat Pelabuhan Perikanan Pantai Bulu</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css" integrity="sha512-IuO+tczf4J43RzbCMEFggCWW5JuX78IrCJRFFBoQEXNvGI6gkUw4OjuwMidiS4Lm9Q2lILzpJwZuMWuSEeT9UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Theme style -->
        <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/dist/css/adminlte.min.css">
        <style type="text/css">
          .loader {
            position: relative;
            width: 100%;
        }
        .swal-button {
          padding: 10px 20px;
          border-radius: 2px;
          background-color: #4962B3;
          font-size: 16px;
          position: relative;
        }
        .swal-title {
          font-weight: bold;
        }
        .swal-text {
          text-align: center;
          color: #000000;
        }
        </style> 
        <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script>
    </head>
    <body>
<div class="loader"></div>
<?php

if (isset($_POST['simpan'])) {
	if (empty($_POST['nama'])) {
	        echo "<script>swal('SURVEI KEPUASAN MASYARAKAT', 'Maaf! Kolom Nama Masih Kosong', 'warning').then((value) => { window.history.go(-1); });</script>";
			//echo "<script type='text/javascript'>alert('Nama Masih Kosong');window.history.go(-1);</script>";
	}
	
	else
	{

        
           include("koneksi.php");
		   //include("koneksi2.php");
           $nama = strtoupper($_POST['nama']);
           $jenkel = $_POST['jk'];
           $pendidikan = $_POST['pendidikan'];
           $desa = strtoupper($_POST['desa']);
           $tanggal = date('Y-m-d H:i:s');
           $kontak = $_POST['hp'];
           $r1 = $_POST['p1'];
           $r2 = $_POST['p2'];
           $r3 = $_POST['p3'];
           $r4 = $_POST['p4'];
           $r5 = $_POST['p5'];
           $r6 = $_POST['p6'];
           $r7 = $_POST['p7'];
           $r8 = $_POST['p8'];
           $r9 = $_POST['p9'];
           $r10 = $_POST['p10'];
           $tahun = date('Y');
           $idz = date('YmdHis');
           
           $jum = $r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10;
           
           
           
           $validasinama = $koneksiikm->query("SELECT nama FROM formulaikm WHERE nama='$nama' AND tahun='$tahun'") or die (mysqli_error());
           $valid = mysqli_fetch_array($validasinama);
           
           $validasidata = $koneksiikm->query("SELECT COUNT(*) FROM formulaikm WHERE tahun='$tahun'") or die (mysqli_error());
           $hit= mysqli_fetch_array($validasidata);
           $ke = $hit[0]+1;
            
        if(($nama==$valid[0]) || ($hit[0]>=110)){
            
               if($nama==$valid[0]){
                   echo "<script>swal('SURVEI KEPUASAN MASYARAKAT', 'Terima Kasih, Nama $nama Sudah Pernah Mengisi Kuisioner', 'warning').then((value) => { window.history.go(-1); });</script>";
                   //echo "<script type='text/javascript'>alert('Terima Kasih, Nama $nama Sudah Pernah Mengisi Kuisioner');window.history.go(-1);</script>";
               }
               
               else if($hit[0]>=110){
            	   echo "<script>swal('SURVEI KEPUASAN MASYARAKAT', 'Kuota Responden Sudah Terpenuhi', 'warning').then((value) => { window.history.go(-1); });</script>";
               }
               
               
        } else {
            
            // SQL query untuk memeriksa apakah users terdapat di database?
            $sql = "INSERT INTO formulaikm VALUES ('$idz','$nama','$jenkel','$pendidikan','$tanggal','$desa','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$tahun')";      
		    
            		if ($koneksiikm->query($sql) === TRUE) {
            			    
            			    if($kontak!=null){
            			        
            			       include("notifikasiwa-ikm.php");
            			       echo "<script>swal('SURVEI KEPUASAN MASYARAKAT', 'Terima Kasih, Data Kuisioner [$ke] Atas Nama $nama Sudah Tersimpan dan Terkirim [KLIK OK] Cek Whatsapp Anda!', 'success').then((value) => { document.location='./terimakasih' });</script>";
                               //echo "<script type='text/javascript'>alert('TERIMA KASIH, Data Kuisioner [$ke] Atas Nama $nama Sudah Tersimpan dan Terkirim [KLIK OK] Cek Whatsapp Anda!');document.location='./terimakasih'</script>";
                            
            			    } else {
            				   echo "<script>swal('SURVEI KEPUASAN MASYARAKAT', 'Terima Kasih, Data Kuisioner [$ke] Atas Nama $nama Sudah Tersimpan dan Terkirim [KLIK OK]', 'success').then((value) => { document.location='./terimakasih2' });</script>";
                               //echo "<script type='text/javascript'>alert('TERIMA KASIH, Data Kuisioner [$ke] Atas Nama $nama Sudah Tersimpan dan Terkirim [KLIK OK]');document.location='./terimakasih2'</script>";
            				
            			    } 
            				
            			} else {
            			     echo "<script>swal('SURVEI KEPUASAN MASYARAKAT', 'Maaf! Kuisioner Tidak Terkirim', 'warning').then((value) => { window.history.go(-1); });</script>";
            				 //echo "<script type='text/javascript'>alert('Maaf! Kuisioner Tidak Terkirim');window.history.go(-1);</script>";
                    }
                            
            }
                  
	 }
	     
}
?>
</body>
</html>