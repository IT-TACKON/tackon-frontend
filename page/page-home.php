<div <?= $active_home; ?> id="page-home" >
<?php
$token = $_SESSION['authorization']; 
$headers[] = 'authorization: '.$token;

$curl_account = curl_init();
curl_setopt_array($curl_account, array(
  CURLOPT_URL => "http://localhost:8080/questions",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $headers
));

$response = curl_exec($curl_account);
$err = curl_error($curl_account); 
$result  = (array) json_decode($response, true);
curl_close($curl_account);

$questions = $result; 

 
if($result['status'] == "success"){ 
 
}else if($result['status'] == "error"){
   echo "daftar dulu bosque";
}
foreach($result['questions'] as $quest){
?>
   <a href="questions/<?= $quest['author'] ?>" class="text-dark text-decoration-none">
      <div class="card my-1 ">
         <div class="card-header bg-info text-white text-nowrap " >
            <b> @<?= $quest['author'] ?></b> <span class="text-nowrap text-opacity-50 "> · <?= substr($quest['created_at'], 0, 10)." ".substr($quest['created_at'], 11, 5) ?></span>
         </div>
         <div class="card-body">
            <h5 class="card-title"><?= $quest['title'] ?></h5>
            <p class="card-text"><?= $quest['text'] ?></p>
            <a href="#" class="btn btn-info"><?= $quest['upvote'] ?> <i class="fas fa-sort-amount-up"></i></a>
         </div>
      </div>
   </a>
<?php 
}
foreach($result['questions'] as $quest){
?>
   <div class="card my-1">
      <div class="card-header bg-info text-white text-nowrap" >
         <b> @<?= $quest['author'] ?></b> <span class="text-nowrap text-opacity-50 "> · <?= substr($quest['created_at'], 0, 10)." ".substr($quest['created_at'], 11, 5) ?></span>
      </div>
      <div class="card-body">
         <h5 class="card-title"><?= $quest['title'] ?></h5>
         <p class="card-text" ><?= $quest['text'] ?></p>
         <a href="#" class="btn btn-info" ><?= $quest['upvote'] ?> <i class="fas fa-sort-amount-up"></i></a>
         
      </div>
   </div>
<?php 
}
?>
<button   type="button" id="create" class="btn btn-lg btn-info py-2 button-inactive floatings" >
<i class="fas fa-plus fa-lg"></i>
</button>
</div>
