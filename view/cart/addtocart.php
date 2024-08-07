<?php

if(isset($_POST['dathang']) && $_POST['dathang']) {
    // Lấy giá trị từ form
    $img = $_POST['image'];
    $name = $_POST['name']; 
    $color = $_POST['color'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $soluong = 1;
    $id = $_POST['id'];
    
    // Tạo mảng sản phẩm
    $sp = array($id, $img, $name, $color, $size, $price, $soluong);
    
    // Thêm vào giỏ hàng
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $sp);
    header('Location: index.php?act=cart');
}

?>

