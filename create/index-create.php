<?php
session_start();
$token = $_SESSION['authorization'];

$title = $_POST['title'];
$text = $_POST['text'];
$headers[] = 'authorization: '.$token;


$url = 'http://localhost:8080/questions';
$myvars = 'title=' . $title . '&text=' . $text;

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
 
$response = curl_exec( $ch );
curl_close($ch);
$result  = json_decode($response);

print_r($result);


if($result->status == "success"){ 
header("location:../");
}else if($result->status == "error"){
    // header("location:../");


}
?>