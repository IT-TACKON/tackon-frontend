<?php
session_start();
$keyword = $_POST['keyword']; 
$token = $_SESSION['authorization']; 
$headers[] = 'authorization: '.$token;

$url = 'http://localhost:8080/questions/search/'.$keyword; 

$curl_search = curl_init();
curl_setopt_array($curl_search, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $headers
));

$response = curl_exec($curl_search);
$err = curl_error($curl_search); 
$result  = (array) json_decode($response, true);
curl_close($curl_search);
$result['keyword'] = $keyword;

if($result['status'] == "success"){ 

   //Jika pertanyaan ditemukan
   if(!empty($result['questions'][0])){
      $_SESSION['questions'] = $result;
      header("location:../?s=200"); 
   } else { 
      //Jika pertanyaan tidak ditemukan
      header("location:../?s=404");    }
}else{
   // echo "KELIRU";
   // print_r($result);
    header("location:../?s=404");   
}
?>