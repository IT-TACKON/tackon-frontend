<div <?= $active_create; ?> class=" mt-5 my-5 "    id="page-create" >
   <h2 class="mt-5 mb-2 align-middle">Edit Account</h2>
   <?php if(isset($edit_fail)){echo '<p class="text-danger">Edit faill</p>'; }?>
   <form action="update/" method="POST">
      <h4 class="mt-3">Username</h4>
      <div class="  mb-3"> 
         <input type="text" name="username" class="form-control form-control-lg" value="<?= $username ?>" placeholder="username" aria-label="search" aria-describedby="basic-addon2">
      </div>
      <h4 class="mt-3">E-mail</h4>
      <div class="  mb-3"> 
         <input type="email" minlength="2" name="email" class="form-control form-control-lg" value="<?= $email ?>" placeholder="username" aria-label="search" aria-describedby="basic-addon2">
      </div>
      <h4 class="mt-3">Current password</h4>
      <div class="  mb-3"> 
         <input type="password" minlength="8" name="currentPassword" class="form-control form-control-lg" placeholder="username" aria-label="search" aria-describedby="basic-addon2">
      </div>
      <h4 class="mt-3">New password</h4>
      <div class="  mb-4"> 
         <input type="password" minlength="8" name="newPassword" class="form-control form-control-lg" placeholder="username" aria-label="search" aria-describedby="basic-addon2">
      </div>
      <button   type="submit" class="btn btn-lg btn-block btn-info py-2  " ><i class="fas fa-edit fa-lg"></i> Update</button>
   </form>

   <button   type="button" id="home" class="btn btn-lg btn-info py-3 button-inactive floatings" > <i class="fas fa-times fa-lg"> </i></button> 
</div> 