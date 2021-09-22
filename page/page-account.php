<div id="page-account" class="inactive">
<?php
$token = $_SESSION['authorization']; 
$headers[] = 'authorization: '.$token;

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
$err = curl_error($curl_account); 
$result  = json_decode($response);
curl_close($curl_account);

$username = $result->user->username;
$email = $result->user->email;

 
if($result->status == "success"){ 
 
}else if($result->status == "error"){
   echo "daftar dulu bosque";
}
?>
   <div class="block mt-4">
      <div class="col text-center">
         <div class="avatar avatar-xl">
            <span class="avatar-text  avatar-text-info rounded-circle">
               <span class="initial-wrap">
                  <span>UU</span>
               </span>
            </span>
         </div>
         <h3><?= $username ?></h3>
         <table class="table mt-4">
            <tbody>
               <tr>
                  <th scope="row">Username</th>
                  <td><?= $username ?></td>
               </tr>
               <tr>
                  <th scope="row">E-mail</th>
                  <td><?= $email ?></td>
               </tr>
            </tbody>
         </table>
         <p><a class="btn btn-info mt-2" href="#"><i class="fas fa-edit fa-lg"></i> Edit</a></p>
      </div>
   </div>
</div>