<div id="page-create" <?php echo $active_create; ?> class="mt-5" >
   <div class="alert bg-info col-xl-4 col-md-6 col-sm-12"   role="alert">
      <h2 style="color: white;">Crate Your Question !!</h2>
   </div>
   <div class="card my-1">
      <div class="card-header bg-info text-white text-nowrap">
         <b> @<?= $quest['author'] ?></b> <span class="text-nowrap text-opacity-50 "> ·
            <?= substr($quest['created_at'], 0, 10)." ".substr($quest['created_at'], 11, 5) ?></span>
      </div>
      <div class="card-body">
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="colFormLabel" placeholder="Enter Question Tittle">
            </div>
         </div>
         <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Text</label>
            <div class="col-sm-10">
               <textarea class="form-control" id="textAreaExample1" placeholder="Your Question" rows="4"></textarea>
               
            </div>
         </div>
      </div>
   </div>
</div>