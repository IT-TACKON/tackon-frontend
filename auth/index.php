<?php
$email = $_POST['email'];
$password = $_POST['password'];

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/login");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, true);

// $data = array(
//     'email' => $email,
//     'password' => $password
// );

// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// $output = curl_exec($ch);
// $info = curl_getinfo($ch);
// curl_close($ch);
// $result  = json_decode($output);
// print_r($result); 

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
print_r($result);
?>