<?php
session_start();
$username = $_POST['username']; 
$email = $_POST['email']; 
$currentPassword = $_POST['currentPassword']; 
$newPassword = $_POST['newPassword']; 

$token = $_SESSION['authorization']; 
$url = 'http://localhost:8080/user'; 

$headers[] = 'authorization: '.$token;
$post = "username=".$username."&email=".$email."&currentPassword=".$currentPassword."&newPassword=".$newPassword;

$curl_edit = curl_init();
curl_setopt_array($curl_edit, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PATCH",
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
   header("location:../?p=updated"); 
} else { 
   header("location:../?p=edit-f"); 
} 
?>