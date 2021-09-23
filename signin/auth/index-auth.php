<?php
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

// echo "<br> email".$email;
// echo "<br> password".$password; 
// print("<br>Status :".$result->status);
// print("<br>Akses Token : ".$result->accessToken);

if($result->status == "success"){
session_start();
$_SESSION['status'] = $result->status;
$_SESSION['authorization'] = $result->accessToken;
header("location:../../");
}else if($result->status == "error"){
	echo "daftar dulu bosque";
}
?>