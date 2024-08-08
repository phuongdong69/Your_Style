<?php
if (isset($_SESSION['cart'])) {
    echo '<a href="index.php?act=home"><button>Tiếp Tục Mua Sắm</button></a>';
?>

    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container shopping-cart">
            <div class="row">
                <div class="col-md-12">
                    <div class="order-details">
                        <div class="total-price" id="thanh-tien">
                            <h2>Thành Tiền:</h2>
                            <p style="margin-left: 30px; font-weight: bold;" id="thanh-tien-value">
                                <?php echo number_format(calculateTotal($_SESSION['cart']), 0, ',', '.'); ?> VNĐ
                            </p>
                        </div>
                        <div class="total-price" id="tong-tien">
                            <h2>Tổng Tiền:</h2>
                            <p style="margin-left: 30px; font-weight: bold;" id="tong-tien-value">
                                <?php echo number_format(calculateTotal($_SESSION['cart']), 0, ',', '.'); ?> VNĐ
                            </p>
                            <div class="discount-code">
                                <input type="text" placeholder="Mã giảm giá">
                                <button>Nhập mã giảm giá</button>
                            </div>
                        </div>

                        <div class="discount-code"></div>
                        <hr>
                        <!-- <button class="checkout-btn">Thanh Toán</button> -->
                    </div>

                    <form action="addtocart.php" method="post">
                        <?php echo showcart($_SESSION['cart']); ?>
                    </form>

                    <div class="clearfix"></div>
                    <a href="index.php?act=mua"><button style="float: right; font-size: 20px; margin-left: 10px;">Mua Ngay</button></a>
                    <a href="index.php?act=xoadh"><button style="float: right; font-size: 20px;">Xóa Tất Cả</button></a>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
    echo '
    <div class="conc">
        <h1 class="titlec">Giỏ hàng</h1>
        <p class="messagec">Không có sản phẩm trong giỏ hàng.</p>
        <img src="images/nocart.jpg" alt="Empty Cart" class="cart-imagec">
        <a href="index.php?act=home"><button class="shop-buttonc">Mua sắm ngay</button></a>
    </div>
    <h3 class="title" style="margin-left: 630px;"><strong>Các Sản Phẩm</strong> Khác</h3>
    <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
    <ul id="hot">
        <li>
            <div class="row">';
    $count = 0; // Initialize counter
    foreach ($listSanPham as $sp) {
        if ($count >= 4) break; // Stop after 4 products
        extract($sp);
        $linkUrl = "?act=sanphamct&id=" . $id;
        $imgPath = "./admin/img/" . $galery_imgage;
        echo '
                <div class="col-md-3 col-sm-6">
                    <div class="products">
                        <div class="offer">New</div>
                        <div class="offer">- 25%</div>
                        <div class="thumbnail"><a href="' . $linkUrl . '"><img src="' . $imgPath . '" alt="Product Name"></a></div>
                        <div class="productname">' . $name . '</div>
                        <h4 class="price">' . $price . ' VNĐ</h4>
                    </div>
                </div>';
        $count++;
    }
    echo '
            </div>
        </li>
    </ul>';
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cartItems = document.querySelectorAll('.cart-item');
        const thanhTienElement = document.getElementById('thanh-tien-value');
        const tongTienElement = document.getElementById('tong-tien-value');

        cartItems.forEach(item => {
            const index = item.getAttribute('data-index');
            const decreaseBtn = item.querySelector('.decrease-btn');
            const increaseBtn = item.querySelector('.increase-btn');
            const quantityInput = item.querySelector('.quantity-input');
            const itemPriceElement = item.querySelector('.item-price');

            decreaseBtn.addEventListener('click', (event) => {
                event.preventDefault();
                let quantity = parseInt(quantityInput.value);
                if (quantity > 1) {
                    quantity--;
                    quantityInput.value = quantity;
                    updatePrice(index, quantity, itemPriceElement);
                }
            });

            increaseBtn.addEventListener('click', (event) => {
                event.preventDefault();
                let quantity = parseInt(quantityInput.value);
                quantity++;
                quantityInput.value = quantity;
                updatePrice(index, quantity, itemPriceElement);
            });
        });

        function updatePrice(index, quantity, itemPriceElement) {
            const pricePerUnit = parseInt(itemPriceElement.getAttribute('data-price-per-unit'));
            const newPrice = pricePerUnit * quantity;
            itemPriceElement.textContent = newPrice.toLocaleString('vi-VN') + ' VNĐ';
            updateTotalPrice();
        }

        function updateTotalPrice() {
            let total = 0;
            cartItems.forEach(item => {
                const quantity = parseInt(item.querySelector('.quantity-input').value);
                const pricePerUnit = parseInt(item.querySelector('.item-price').getAttribute('data-price-per-unit'));
                total += quantity * pricePerUnit;
            });
            thanhTienElement.textContent = total.toLocaleString('vi-VN') + ' VNĐ';
            tongTienElement.textContent = total.toLocaleString('vi-VN') + ' VNĐ';
        }
    });
</script>


<?php

//   if(isset($_SESSION['cart'])){
//     echo var_dump($_SESSION['cart']);
//     showcart($_SESSION['cart']);

//   echo ' <a href="index.php?act=home"><button>Tiếp Tục Mua Sắm</button></a>';

//  
?>
<!-- //  <div class="clearfix">
//       </div>
//       <div class="container_fullwidth">
//         <div class="container shopping-cart">
//           <div class="row">
//             <div class="col-md-12">
//               <h3 class="title">
//                 Giỏ Hàng
//               </h3>
//               <div class="clearfix">
//               </div>
//               <table class="shop-table">
//                 <thead>
//                   <tr>
//                     <th>
//                       Hình Ảnh
//                     </th>
//                     <th>
//                       Tên Sản Phẩm
//                     </th>
//                     <th>
//                       Màu Sắc
//                     </th>
//                     <th>
//                       Size
//                     </th>
//                     <th>
//                       Số Lượng
//                     </th>
//                     <th></th>
//                     <th></th><th></th>
//                     <th>
//                       Giá
//                     </th>
//                     <th>
//                       Tổng Tiền
//                     </th>
//                     <th>Hủy</th>

//                   </tr>
//                 </thead>
//                 <tbody>

//                   <form action="addtocart.php" method="post"> -->
<?php

//                     echo showcart($_SESSION['cart']);
//                   
?>

</form>





<!-- //               </table>
              
//               <div class="clearfix">
//               </div>
//               <a href="index.php?act=mua"><button style="float: right;font-size: 20px;margin-left: 10px;">Mua Ngay</button></a>
//               <a href="index.php?act=xoadh"><button style="float: right;font-size: 20px;">Xóa Tất Cả</button></a>
//                <button style="float: right;font-size: 20px;"  ><a href="index.php?act=xoadh">Xóa All</a></button>
//                <button style="float: right;font-size: 20px;"  ><a href="index.php?act=mua">Mua Ngay</a></button>
//         </div>
//       </div>
//       <div class="clearfix">
//       </div>
//         </div>
//         </div> -->
<?php
//         }else{
//           echo 'Bạn chưa đặt hàng. Vui lòng đặt hàng ==> <a href="index.php?act=home"><button>Đặt Hàng</button></a> ';

//           echo '
//           <div class="conc">
//               <h1 class="titlec">Giỏ hàng</h1>
//               <p class="messagec">Không có sản phẩm trong giỏ hàng.</p>
//               <img src="images/nocart.jpg" alt="Empty Cart" class="cart-imagec">
//               <a href="index.php?act=home"><button class="shop-buttonc">Mua sắm ngay</button></a>
//           </div>
//           <h3 class="title" style="margin-left: 630px;"><strong>Các Sản Phẩm</strong> Khác</h3>
//           <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
//           <ul id="hot">
//               <li>
//                   <div class="row">';
//                   $count = 0; // Initialize counter
//                   foreach ($listSanPham as $sp) {
//                       if ($count >= 4) break; // Stop after 4 products
//                       extract($sp);
//                       $linkUrl = "?act=sanphamct&id=" . $id;
//                       $imgPath = "./admin/img/" . $galery_imgage;
//                       echo '
//                       <div class="col-md-3 col-sm-6">
//                           <div class="products">
//                               <div class="offer">New</div>
//                               <div class="offer">- 25%</div>
//                               <div class="thumbnail"><a href="' . $linkUrl . '"><img src="' . $imgPath . '" alt="Product Name"></a></div>
//                               <div class="productname">' . $name . '</div>
//                               <h4 class="price">' . $price . ' VNĐ</h4>
//                           </div>
//                       </div>';            
//   $count++; 
//                   }
//   echo '
//                   </div>
//               </li>
//           </ul>';
//       }
?>