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
$questions = $result;
 
if($result['status'] == "success"){ 
foreach($result['questions'] as $quest){
?>
   <div class="card my-1">
      <div class="card-header bg-info text-white text-nowrap" >
         <a href=""> <b> @<?= $quest['author'] ?></b> <span class="text-nowrap text-opacity-50 "> · <?= substr($quest['created_at'], 0, 10)." ".substr($quest['created_at'], 11, 5) ?></span>
      </div>
      <div class="card-body">
         <h5 class="card-title"><?= $quest['title'] ?></h5>
         <p class="card-text"><?= $quest['text'] ?></p>
         <a href="#" class="btn btn-info"><?= $quest['upvote'] ?> <i class="fas fa-sort-amount-up"></i></a> 
      </div>
   </div>
<?php 
}
}
?>