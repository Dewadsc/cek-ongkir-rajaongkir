<?php
  $curl = curl_init();
        
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "origin=".$_POST['kota_asal']."&destination=".$_POST['kota_tujuan']."&weight=".$_POST['berat']."&courier=".$_POST['kurir']."",
    CURLOPT_HTTPHEADER => array(
      "content-type: application/x-www-form-urlencoded",
      "key: YOUR-API"
    ),
  ));
        
  $response = curl_exec($curl);
  $err = curl_error($curl);
        
  curl_close($curl);
        
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
?>