<style>
/* CSS cho dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000; 
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    top: 100%; 
    margin-top: 0px; 
}

.dropdown-content li {
    color: white; 
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}



.dropdown:hover .dropdown-content {
    display: block;
}

</style>
<body id="home">
   <div class="wrapper">
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-2 col-sm-2">
                  <div class="logo">
                     <a href="index.php"><img src="images/z5613796303251_0df7407cc28d8200079c638466473baf-removebg-preview.png" alt="FlatShop"></a>
                  </div>
               </div>
               <div class="col-md-10 col-sm-10">
                  <div class="header_top">
                     <div class="row">
                        <div class="col-md-3">
                           <ul class="option_nav">
                           </ul>
                        </div>
                        <!-- <div class="col-md-6">
                           <ul class="topmenu">
                              <li><a href="index.php?act=news">Tin tức</a></li>
                              <li><a href="index.php?act=introduce">Giới thiệu</a></li>
                              <li><a href="index.php?act=contact">Liên Hệ</a></li>
                           </ul>
                        </div> -->
                      
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="header_bottom">
                     <ul class="option">
                        <li id="search" class="search">
                           <form action="index.php" method="get">
                              <input style="width: 500%;" class="search-input" placeholder="Tìm kiếm sản phẩm..." type="text" name="search">
                              <input class="search-submit" type="submit" value="">
                           </form>
                        </li>

                        <li class="option-cart">
                           <a href="index.php?act=cart" class="cart-icon">cart <span class="cart_no"></span></a>
                        </li>
                        <div class="col-md-3">
                           <ul class="usermenu">
                              <?php
                              if(isset($_SESSION['username']) && $_SESSION['username']!=""){
                                 echo '<li class="dropdown">';
                                 echo '<a href="#" class="log">'.htmlspecialchars($_SESSION['username']).'</a>';
                                 echo '<ul class="dropdown-content">';
                                 echo '<li><a href="index.php?act=userinfo">Tài khoản</a></li>';
                                 echo '<li><a href="index.php?act=logout">Thoát</a></li>';

                         //        if(isset($_SESSION['id_role']) && $_SESSION['id_role'] == 2){

                                    // echo '<li><a href="http://localhost:81/Your_Style/admin/index.php?act=bieudo">Admin</a></li>';

                                    // echo '<li><a href="http://localhost:81/Your_Style/admin/index.php?act=bieudo">Admin</a></li>';


                                 if(isset($_SESSION['id_role']) && ($_SESSION['id_role'] == 2)){
                                    echo '<li><a href="admin/index.php">Admin</a></li>';

                                }
                                 echo '</ul>';
                                 echo '</li>';
                              ?>
                              <li><a href="index.php?act=login" class="log" > Login</a></li>
                              <?php } ?>
                           </ul>
                        </div>
                     </ul>
                     <div style="margin-left: 110px;" class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                     </div>
                     <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                           <li><a href="index.php?act=home">Trang Chủ</a></li>
                           <li class="dropdown">
                           </li>
                           <li class="dropdown">
                              <a href="index.php?act=shirt" class="dropdown-toggle" data-toggle="dropdown">Áo</a>
                              <div class="dropdown-menu mega-menu">
                                 <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                    <ul class="mega-menu-links">
                                          <?php
                                          $listcategory = load_category_by_filter('áo');
                                          foreach ($listcategory as $category) {
                                              $id = $category['id'];
                                              $name = $category['name'];
                                              echo '<li><a href="index.php?act=categorysp&id=' . $id . '">' . $name . '</a></li>';
                                          }
                                          ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="dropdown">
                              <a href="index.php?act=pants" class="dropdown-toggle" data-toggle="dropdown">Quần</a>
                              <div class="dropdown-menu mega-menu">
                                 <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                    <ul class="mega-menu-links">
                                          <?php
                                          $listcategory = load_category_by_filter('Quần');
                                          foreach ($listcategory as $category) {
                                              $id = $category['id'];
                                              $name = $category['name'];
                                              echo '<li><a href="index.php?act=categorysp&id=' . $id . '">' . $name . '</a></li>';
                                          }
                                          ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="dropdown">
                              <a href="index.php?act=brand_dior" class="dropdown-toggle" data-toggle="dropdown">Brand</a>
                              <div class="dropdown-menu mega-menu">
                                 <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                       <ul class="mega-menu-links">
                                       <?php
                                          $listbrands = load_brands();
                                          foreach ($listbrands  as $brands) {
                                              $id = $brands['id'];
                                              $name = $brands['name'];
                                              echo '<li><a href="index.php?act=brands&id=' . $id . '">' . $name . '</a></li>';
                                          }
                                          ?>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li><a href="index.php?act=news">Tin tức</a></li>
                              <li><a href="index.php?act=introduce">Giới thiệu</a></li>
                              <li><a href="index.php?act=contact">Liên Hệ</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>