<?php
function showcart($cart) {
    $kq = "";
    foreach ($cart as $index => $sp) {
        $kq .= '<tr>
                    <td>
                      <img src="'.$sp[1].'" width="100px">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                         '.$sp[2].' 
                        </div>
                       
                      </div>
                    </td>
                    <td>
                     '.$sp[3].' 
                    </td>
                    <td>
                      <h5>
                        '.$sp[4].' 
                      </h5>
                    </td>
                    <td>
                      '.number_format($sp[5], 0, ',', '.').' VNĐ
                    </td>
                    <td>
                      <h5>
                        <strong class="red">
                         '.$sp[6].' 
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="index.php?act=removecart&index='.$index.'">
                        <img src="images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>';
    }
    $kq.=' <tr>
                    <td colspan=""> Tổng Đơn Hàng</td>
                    <td></td>
                  </tr>';
                  return $kq;
}

// function calculateTotal($cart) {
//     $total = 0;
//     foreach ($cart as $sp) {
//         $total += $sp[5] * $sp[6]; // Assuming $sp[5] is the price and $sp[6] is the quantity
//     }
//     return $total;
// }
?>


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


