<?php
session_start();
$email = $_POST['e-mail'];
$password = $_POST['password'];


$url = 'http://localhost:8080/login';
$myvars = 'email=' . $email . '&password=' . $password;

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close($ch);
$result  = json_decode($response);
 
   $headers[] = 'authorization: '.$result->accessToken;
   $curl_account = curl_init();
   curl_setopt_array($curl_account, array(
   CURLOPT_URL => "http://localhost:8080/user",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => $headers
   ));
   $response = curl_exec($curl_account); 
   $result_account  = json_decode($response);
   curl_close($curl_account);
   

if($result->status == "success"){
$_SESSION['username'] = $result_account->user->username;
$_SESSION['email'] = $result_account->user->email;
$_SESSION['status'] = $result->status;
$_SESSION['authorization'] = $result->accessToken;
header("location:../../");
}else if($result->status == "error"){
	echo "daftar dulu bosque";
}
?>