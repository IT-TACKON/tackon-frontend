<?php
session_start();
$password = $_POST['password'];  

$token = $_SESSION['authorization']; 
$url = 'http://localhost:8080/user'; 

$headers[] = 'authorization: '.$token;
$post = "password=".$password;

$curl_edit = curl_init();
curl_setopt_array($curl_edit, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_POSTFIELDS => $post,
  CURLOPT_HTTPHEADER => $headers
));

$response = curl_exec($curl_edit);
$err = curl_error($curl_edit); 
$result  = (array) json_decode($response, true);
curl_close($curl_edit);  
print_r($result);
if($result['status'] == "success"){ 
   //Jika sukses
   session_destroy();
   header("location:../../"); 
} else { 
   header("location:../?p=edit-f"); 
} 
?>