<?php
   include "view/layout/slide.php";
?>
<div class="clearfix"></div>
<div class="container_fullwidth">
   <div class="container">
      <!-- <div class="hot-products"> -->
         <h3 class="title"><strong>Sản Phẩm</strong> Nổi Bật</h3>
         <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
         <ul id="hot">
            <li>
               <div class="row">
                  
                  <?php
                  foreach ($listSanPham as $sp) {
                     extract($sp);
                     $linkUrl = "?act=sanphamct&id=" . $id;
                     $imgPath = "./admin/img/" . $galery_imgage;
                  ?>
                  <div class="col-md-3 col-sm-6">
                     <div class="products">
                        <div class="offer">New</div>
                        <div class="offer">- 25%</div>
                        <div style="height: 330px;" class="thumbnail"><a href="<?= $linkUrl ?>"><img src="<?= $imgPath ?>" alt="Product Name"></a></div>
                        <div class="productname"><?= $name ?></div>
                        <h4 class="price"><?= $price ?> VNĐ</h4>
                        <div class="button_group">
                           <!-- <button class="button add-cart" type="button">Thêm vào giỏ hàng</button> -->
                        <!-- <button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button> -->
                     </div>
                     </div>
                  </div>
                  <?php } ?>
                 
               </div>
            </li>
         </ul>
   </div>
</div>