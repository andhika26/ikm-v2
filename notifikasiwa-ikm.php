<?php
$nama2 = strtoupper($nama);
$tahun = date('Y');

$data = [
'api_key' => 'To5N3pNBCEgmB4qLKnk4G3beNm9D1A',
'sender'  => '6285156957434',
'number'  => $kontak,
'media_type' => 'image',
'caption' => '*[BUKTI KUISIONER]*

Terima kasih disampaikan kepada Saudara/i telah menjadi Koresponden kami di e-KLiK (Survei Online)

Nama   : *'.$nama2.'*
Alamat : *'.$desa.'*

telah mengisi Survei Kuisioner Kepuasan Masyarakat ke- *'.$ke.'* Pada Tahun '.$tahun.' dengan jumlah Poin *'.$jum.'*
Terima kasih, Kepuasan Anda adalah menjadikan motivasi kami untuk Melayani dengan *PROAKTIF*.',
'url' => 'https://pppbulu.dkp.jatimprov.go.id/simpelpas/ilustrasi/header_survei.png'
];

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://wabeta.perahulayarkertas.com/send-media',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($data),
CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

?>