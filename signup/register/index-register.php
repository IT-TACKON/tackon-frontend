<?php
$email = $_POST['e-mail'];
$password = $_POST['password'];
$username = $_POST['username'];
 
$post = "username=".$username."&email=".$email."&password=".$password;

$curl_signup = curl_init();
curl_setopt_array($curl_signup, array(
  CURLOPT_URL => "http://localhost:8080/register",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $post
));

$response = curl_exec($curl_signup);
curl_close($curl_signup);
$result  = (array) json_decode($response, true); 
 
print_r($post);
print_r($result);
if($result['status'] == "success"){
 header("location:../../signin/?m=reg");
}else if($result['status'] == "error"){
	if($result['message'] == "Error: Password must be at least 8 character"){
		header("location:../../signin/?m=er-pass");
	}else if($result['message'] == "Error: Email already used"){
    header("location:../../signin/?m=er-mail");
  }

}
?>