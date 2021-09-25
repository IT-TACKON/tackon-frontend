<?php 

?>
<form class="create-question" action="create/" method="POST">
<div id="page-create" class="inactive mt-5" >
   <div class="alert bg-info col-xl-3 col-md-6 col-sm-12"   role="alert">
      <h2 style="color: white;">Create Your Question !!</h2>
   </div>
   <div class="card my-1">
      <div class="card-header bg-info text-white text-nowrap">
         <b> @<?= $quest['author'] ?></b> <span class="text-nowrap text-opacity-50 "> ·
            <?= substr($quest['created_at'], 0, 10)." ".substr($quest['created_at'], 11, 5) ?></span>
      </div>
      <div class="card-body">
         <div class="form-group row">
           
            <div class="col-sm-12">
               <input type="text" name="title" class="form-control" id="colFormLabel" placeholder="Enter Question Tittle">
            </div>
         </div>
         <div class="form-group row">
            
            <div class="col-sm-12">
               <textarea class="form-control" name="text" id="textAreaExample1" placeholder="Your Question" rows="4"></textarea>
               
            </div>
         </div>
      </div>
      <br>
      <button  type="submit" class="btn btn-lg btn-block btn-info py-2 button-inactive col-xl-3 col-md-6 col-sm-12" >
                  <i class="far fa-paper-plane"></i>
       </button>
       <br><br>
   </div>
   
</div>
</form>