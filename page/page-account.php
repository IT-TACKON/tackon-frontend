<div id="page-account" <?= $active_account ?>>>
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
                  <span><?= substr($username,0,1); ?></span>
               </span>
            </span>
         </div>
         <h3><?= $username ?></h3>
         <table class="table mt-4 text-left">
            <tbody>
               <tr>
                  <th scope="row">Username</th>
                  <td class="text-right"><?= $username ?></td>
               </tr>
               <tr>
                  <th scope="row">E-mail</th>
                  <td class="text-right"><?= $email ?></td>
               </tr> 
            </tbody>
         </table>
         <div class="d-flex justify-content-center">
            <a class="btn btn-outline-info mt-2 col-8 py-2" href="#"><i class="fas fa-edit fa-lg"></i> Edit Account</a>
         </div>
          <div class="d-flex justify-content-center">
            <a class="btn btn-outline-danger mt-2 col-8 py-2" href="#"><i class="fas fa-trash fa-lg"></i> Delete Account</a>
         </div>
          <div class="d-flex justify-content-center">
            <a class="btn btn-outline-secondary mt-2 col-8 py-2" href="#"><i class="fas fa-sign-out-alt fa-lg"></i> Sign Out</a>
         </div>

      </div>
   </div>
</div>