<?php 
$account_username = $_SESSION['username'];
?>
<div id="page-create" <?php echo $active_create; ?> class="mt-5" >
   <div class="alert bg-info col-xl-4 col-md-6 col-sm-12 text-white"   role="alert">
      <h3 >Create Your Question !!</h3>
   </div>
   <div class="card my-1">
      <div class="card-header bg-info text-white text-nowrap">
         <b> @<?= $account_username ?></b> <span class="text-nowrap text-opacity-50 "> ·
         <?= date("Y-m-d h:m") ?></span>
      </div>
      <div class="card-body">
         <form class="create-question" action="create/" method="POST">
         <div class="form-group row">
            <div class="col-sm-12">
               <input type="text" name="title" class="form-control" id="colFormLabel" placeholder="Question Tittle" style="border-radius:10px; font-weight: bold;">
            </div>
         </div>
         <div class="form-group row">
            <div class="col-sm-12">
               <textarea class="form-control auto-resize" name="text" id="txtarea" placeholder="Your Question" rows="4" minlength="30" style="border-radius:10px;"></textarea>
            </div>
         </div>
         <div class="col-sm-12 text-right">
               <button type="submit" class="btn btn-info btn-lg">Ask <i class="fas fa-paper-plane "></i></button> 
            </div>
         
      </div> 
   </div>
   <button   type="button" id="home" class="btn btn-lg btn-info py-3 button-inactive floatings" > <i class="fas fa-times fa-lg"> </i>
</div>
</form>  