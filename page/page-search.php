<div id="page-feed"  <?= $active_search; ?> class=" mt-5 " >
   <h2 class="mt-5">Search</h2>
   <form action="search/" method="POST">
      <div class="input-group mb-3">
         <input type="text" minlength="2" name="keyword" class="form-control form-control-lg" placeholder="Topic, questions, etc." aria-label="search" aria-describedby="basic-addon2">
         <div class="input-group-append">
            <button type="submit" class="input-group-text btn searchs text-white" id="basic-addon2">ㅤ<i class="fas fa-search fa-lg"></i>ㅤ</button type="submit">
         </div>
      </div>
   </form>
</div>