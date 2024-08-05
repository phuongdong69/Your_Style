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
                  <!-- <div class="col-md-3 col-sm-6">
                     <div class="products">
                        <div class="offer">New</div>
                        <div class="offer">- %20</div>
                        <div class="thumbnail"><a href="index.php?act=details"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                        <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                        <h4 class="price">$451.00</h4>
                        <div class="button_group"><button class="button add-cart" type="button">Thêm vào giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                     </div>
                  </div>  -->
                      <!--<img src="./" alt=""> -->
                  <?php
                  foreach ($listSanPham as $sp) {
                     extract($sp);
                     $linkUrl = "?act=sanphamct&id=" . $id;
                     $imgPath = "./admin/img/" . $galery_imgage;
                  ?>
                  <div class="col-md-3 col-sm-6">
                     <div class="products">
                        <div class="offer">New</div>
                        <div class="offer">- 85%</div>
                        <div style="height: 330px;" class="thumbnail"><a href="<?= $linkUrl ?>"><img src="<?= $imgPath ?>" alt="Product Name"></a></div>
                        <div class="productname"><?= $name ?></div>
                        <h4 class="price"><?= $price ?> VNĐ</h4>
                        <div class="button_group">
                           <!-- <button class="button add-cart" type="button">Thêm vào giỏ hàng</button> -->
                        <!-- <button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button> -->
                     </div>
                     </div>
                  </div>
                     <!-- <div class="box_items">
                        <div class="box_items_img">
                           <a href="?= $linkUrl ?>"><img src="?= $imgPath ?>" alt=""></a>
                           <div class="add" href="">ADD TO CART</div>
                        </div>
                        <a class="item_name" href="?= $linkUrl ?>">?= $name ?></a>
                        <p class="price">$?= $price ?></p></div>-->
                  <?php } ?>
               </div>
            </li>
         </ul>
      <!-- </div> -->
      <!-- <div class="clearfix"></div>
      <div class="featured-products">
         <h3 class="title"><strong>Sản Phẩm </strong>Ưa Chuộng</h3>
         <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
         <ul id="featured">
            <li>
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div class="products">
                        <div class="offer">New</div>
                        <div class="thumbnail"><a href="index.php?act=details"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                        <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                        <h4 class="price">$451.00</h4>
                        <div class="button_group"><button class="button add-cart" type="button">Thêm vào giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                     </div>
                  </div>

               </div>
            </li>
         </ul>
      </div>
      <div class="clearfix"></div> -->

   </div>
</div>