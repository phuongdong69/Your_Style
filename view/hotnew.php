<div class="clearfix"></div>
<div class="container_fullwidth">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="category leftbar">
               <h3 class="title">
                  Đây là trang sản phẩm mới
               </h3>
               <ul>
                  <?php
                  $listcategory = load_category();
                  foreach ($listcategory as $category) {
                      $id = $category['id'];
                      $name = $category['name'];
                      echo '<li><a href="index.php?act=category&id=' . $id . '">' . $name . '</a></li>';
                  }
                  ?>
               </ul>
            </div>
         </div>
         
         <div class="col-md-9">
            <div class="products-list">
               <div class="row">
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
