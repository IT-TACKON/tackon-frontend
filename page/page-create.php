<div id="page-create" class="inactive mt-5">
   <h2 class="mt-5">Search</h2>
   <div class="block mt-3">
      <div class="input-group mb-3">
         <input type="text" class="form-control form-control-lg" placeholder="Search post here..." aria-label="Example text with button addon" aria-describedby="button-addon1">
         <button class="btn searchs text-white" type="button" id="button-addon1">ㅤ<i class="fas fa-search fa-lg"></i>ㅤ</button>
      </div>
   </div>
   <div class="card my-1">
   <div class="card-header bg-info text-white text-nowrap" >
      <b> @<?= $quest['author'] ?></b> <span class="text-nowrap text-opacity-50 "> · <?= substr($quest['created_at'], 0, 10)." ".substr($quest['created_at'], 11, 5) ?></span>
   </div>
   <div class="card-body">
      <h5 class="card-title"><?= $quest['title'] ?></h5>
      <p class="card-text"><?= $quest['text'] ?></p>
      <a href="#" class="btn btn-info"><?= $quest['upvote'] ?> <i class="fas fa-sort-amount-up"></i></a>
   </div>
</div>
</div>