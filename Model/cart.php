<?php
function showcart($cart) {
  $kq = "";
  foreach ($cart as $index => $sp) {
      $unitPrice = (float)$sp[5]; // Đảm bảo giá đơn vị là số thực
      // $quantity = $soluong; // Giá trị mặc định là 1

      $kq .= '
      
      <div class="main-content">
          <div class="cart-items">
              <div class="cart-item">
                  <img src="'.$sp[1].'" alt="Product Image">
                  <div class="item-details">
                      <p class="item-name">'.$sp[2].'</p>
                      <div class="gia">Giá Tiền:
                          '.number_format($unitPrice, 0, ',', '.').' VNĐ
                      </div>
                      <div class="an">
                      <input type="hidden" class="item-price" id="item-price-'.$index.'" data-price-per-unit="'.$unitPrice.'">
                          
                      </div>
                  </div>
                 <div class="product-details">
                    <div class="product-color">
                        <p style="text-align: center;"><strong>Màu:</strong>   '.$sp[3].'</p>
                    </div>
                    <div class="product-size">
                        <p style="text-align: center;"><strong>Size:</strong>  '.$sp[4].'</p>
                    </div>
                </div>

                  <div class="item-quantity">
                      <button style="margin:0px 10px 0px 10px" class="decrease-btn" data-index="'.$sp[6].'">-</button>
                      <input type="text" class="quantity-input" id="quantity-input-'.$sp[6].'" value="'.$sp[6].'" max="<?= $quantity ?>">
                      <button style="margin:0px 10px 0px 10px" class="increase-btn" data-index="'.$sp[6].'">+</button>
                  </div>
                 <button class="delete-btn" data-index="'.$index.'">Xóa</button> <!-- Nút xóa -->
              </div>
          </div>
      </div>';
  }
  return $kq;
}
function delete_cart_item($index) {
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        // Sắp xếp lại chỉ số sau khi xóa
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
  }
 // <select name="color['.$index.']">
                      //     <option value="Đen" '.($sp[3] == 'Đen' ? 'selected' : '').'>Đen</option>
                      //     <option value="Kem" '.($sp[3] == 'Kem' ? 'selected' : '').'>Kem</option>
                      //     <option value="Nâu Sữa" '.($sp[3] == 'Nâu Sữa' ? 'selected' : '').'>Nâu Sữa</option>
                      //     <option value="Trắng" '.($sp[3] == 'Trắng' ? 'selected' : '').'>Trắng</option>
                      //     <option value="Ghi" '.($sp[3] == 'Ghi' ? 'selected' : '').'>Ghi</option>
                      // </select>
                  //     <select name="size['.$index.']">';
                  //     $sizes = ['S', 'M', 'L', 'XL', 'XXL'];
                  //     foreach ($sizes as $size) {
                  //         $selected = ($sp[4] == $size) ? 'selected' : '';
                  //         $kq .= '<option value="'.$size.'" '.$selected.'>'.$size.'</option>';
                  //     }
                  // $kq .= '</select>
function calculateTotal($cart) {
  $total = 0;
  foreach ($cart as $sp) {
      $unitPrice = (Double)$sp[5]; // Đảm bảo giá đơn vị là số thực
      $quantity = $sp[6]; 
      $total += $unitPrice * $quantity; 
  }
  return $total;
}

?>

  <!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    // Xử lý sự kiện thay đổi số lượng
    var quantityInputs = document.querySelectorAll('.quantity-input');

    quantityInputs.forEach(function(input) {
        input.addEventListener('input', function() {
            var index = this.id.split('-')[2]; // Lấy chỉ số từ id của input
            var unitPriceElement = document.getElementById('item-price-' + index);
            var totalPriceElement = this.nextElementSibling; // Phần tử chứa giá tiền

            var unitPrice = parseFloat(unitPriceElement.getAttribute('data-price-per-unit'));
            var quantity = parseInt(this.value, 10) || 1; // Mặc định là 1 nếu input rỗng

            var totalPrice = unitPrice * quantity;
            totalPriceElement.textContent = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(totalPrice);
        });
    });

    // Xử lý sự kiện nhấn nút cộng
    document.querySelectorAll('.increase-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var index = this.getAttribute('data-index');
            var quantityInput = document.getElementById('quantity-input-' + index);
            var quantity = parseInt(quantityInput.value, 10) || 1;
            quantityInput.value = quantity + 1;
            quantityInput.dispatchEvent(new Event('input'));
        });
    });

    // Xử lý sự kiện nhấn nút trừ
    document.querySelectorAll('.decrease-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var index = this.getAttribute('data-index');
            var quantityInput = document.getElementById('quantity-input-' + index);
            var quantity = parseInt(quantityInput.value, 10) || 1;
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                quantityInput.dispatchEvent(new Event('input'));
            }
        });
    });
});
</script> -->



<!-- 
function showcart($cart) {
    $kq = "";
    foreach ($cart as $index => $sp) {
        $kq .= '<tr>
                    <td><img src="'.$sp[1].'" width="100px"></td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">'.$sp[2].'</div>
                      </div>
                    </td>
                    <td>
                      <select name="color['.$index.']">
                        <option value="Red" '.($sp[3] == 'Red' ? 'selected' : '').'>Red</option>
                        <option value="Blue" '.($sp[3] == 'Blue' ? 'selected' : '').'>Blue</option>
                      </select>
                    </td>
                    <td>
                      <select name="size['.$index.']">
                        <option value="S" '.($sp[4] == 'S' ? 'selected' : '').'>S</option>
                        <option value="M" '.($sp[4] == 'M' ? 'selected' : '').'>M</option>
                      </select>
                    </td>
                    <td><input type="number" name="quantity['.$index.']" value="'.$sp[6].'" min="1"></td>
                    <td>'.number_format($sp[5], 0, ',', '.').' VNĐ</td>
                    <td>
                      <h5><strong class="red">'.number_format($sp[5] * $sp[6], 0, ',', '.').' VNĐ</strong></h5>
                    </td>
                    <td><a href="index.php?act=removecart&index='.$index.'"><img src="images/remove.png" alt=""></a></td>
                  </tr>';
    }
    $kq .= '<tr><td colspan="6">Tổng Đơn Hàng</td><td colspan="2"><h5><strong class="red">'.number_format(calculateTotal($cart), 0, ',', '.').' VNĐ</strong></h5></td></tr>';
    return $kq;
}

function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $sp) {
        $total += $sp[5] * $sp[6]; 
    }
    return $total;
} -->


