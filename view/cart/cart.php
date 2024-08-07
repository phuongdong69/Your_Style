
 <?php

  if(isset($_SESSION['cart'])){
    // echo var_dump($_SESSION['cart']);
    // showcart($_SESSION['cart']);
  
  echo ' <a href="index.php?act=home"><button>Tiếp Tục Mua Sắm</button></a>';

 ?>
 <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Giỏ Hàng
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Hình Ảnh
                    </th>
                    <th>
                      Tên Sản Phẩm
                    </th>
                    <th>
                      Màu Sắc
                    </th>
                    <th>
                      Size
                    </th>
                    <th>
                      Giá
                    </th>
                    <th>
                      Số Lượng
                    </th>
                    <th>
                      Hủy Đơn Hàng
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <form action="addtocart.php" method="post">
                  <?php

                    echo showcart($_SESSION['cart']);
                  ?>
                  
                  </form>


                 
                   
              
              </table>
              
              <div class="clearfix">
              </div>

               <button style="float: right;font-size: 20px;"  ><a href="index.php?act=xoadh">Xóa All</a></button>
               <button style="float: right;font-size: 20px;"  ><a href="index.php?act=mua">Mua Ngay</a></button>
        </div>
      </div>
      <div class="clearfix">
      </div>
        </div>
        </div>
        <?php
        }else{
          echo 'Bạn chưa đặt hàng. Vui lòng đặt hàng ==> <a href="index.php?act=home"><button>Đặt Hàng</button></a> ';
        }
        ?>