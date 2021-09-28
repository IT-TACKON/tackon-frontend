<div <?php echo $active_home; ?> id="page-home" >
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
         <?php if(isset($updated)){echo '<p class="text-info">Account updated.</p>'; }?>
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
            <button type="button" id="create"  class="btn btn-outline-info text-info mt-2 col-8 py-2 button-inactive" ><i class="fas fa-edit fa-lg"></i> Edit Account</button>
         </div>
         <div class="d-flex justify-content-center">
            <button class="btn btn-outline-danger mt-2 col-8 py-2"   data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash fa-lg"></i> Delete Account</button>
         </div>
         <div class="d-flex justify-content-center">
            <a class="btn btn-outline-secondary mt-2 col-8 py-2" href="../signout"><i class="fas fa-sign-out-alt fa-lg"></i> Sign Out</a>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header bg-danger text-white">
               <h5 class="modal-title " id="exampleModalLabel">Dellete Account</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <p>Insert password to continue.</p>
               <form action="delete/" method="POST">
                  <div class="input-group mb-3">
                     <input type="password" minlength="2" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="search" aria-describedby="basic-addon2"> 
                  </div> 
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="submit" class="btn btn-danger">Delete Account</button>
            </div>
         </form>
         </div>
      </div>
   </div>
</div>