<?php

$combinations = [];
$colors = [];
$sizes = [];

foreach ($pro_detail as $pro_d) {

    // Lưu trữ các tổ hợp màu sắc và kích thước
    $combinations[$pro_d['color_name']][] = $pro_d['size_sizeValue'];
    $color = $pro_d['color_name'];
    $size = $pro_d['size_sizeValue'];
    $price = $pro_d['price'];

    if (!isset($prices[$color])) {
        $prices[$color] = [];
    }

    $prices[$color][$size] = $price;
    // Loại bỏ trùng lặp cho màu sắc
    if (!in_array($pro_d['color_name'], $colors)) {
        $colors[] = $pro_d['color_name'];
    }

    // Loại bỏ trùng lặp cho kích thước
    if (!in_array($pro_d['size_sizeValue'], $sizes)) {
        $sizes[] = $pro_d['size_sizeValue'];
    }
}

?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
                var colorSelect = document.getElementById('color');
                var sizeSelect = document.getElementById('size');
                var newPriceSpan = document.querySelector('.new_price');
                var oldPriceSpan = document.querySelector('.old_price');

                function updatePrice() {
                    var color = colorSelect.value;
                    var size = sizeSelect.value;

                    if (color && size && prices[color] && prices[color][size]) {
                        var price = prices[color][size];
                        newPriceSpan.textContent = new Intl.NumberFormat('vi-VN', {
                            style: 'currency',
                            currency: 'VND'
                        }).format(price);
                        document.getElementById('hiddenPrice').value = price;
                    } else {
                        newPriceSpan.textContent = 'Giá không có sẵn';
                    }}

                    function updateAvailableSizes() {
                        var selectedColor = colorSelect.value;
                        var availableSizes = combinations[selectedColor] || [];

                        var sizeSelect = document.getElementById('size');
                        var sizeOptions = sizeSelect.options;

                        for (var i = 0; i < sizeOptions.length; i++) {
                            var size = sizeOptions[i].value;

                            if (availableSizes.includes(size)) {
                                sizeOptions[i].style.display = 'block'; // Hiển thị kích thước có sẵn
                            } else {
                                sizeOptions[i].style.display = 'none'; // Ẩn kích thước không có sẵn
                            }
                        }

                        // Chọn kích thước đầu tiên nếu có sẵn
                        sizeSelect.value = availableSizes.length > 0 ? availableSizes[0] : '';

                        // Cập nhật giá ngay sau khi thay đổi màu sắc
                        updatePrice();
                    }

                    colorSelect.addEventListener('change', updatePrice);
                    sizeSelect.addEventListener('change', updatePrice);
                    updateAvailableSizes();
                });
            var prices = <?php echo json_encode($prices); ?>;
</script>

<div style="padding-top: 0px;" class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    <div class="preview_image">
                        <div class="preview-small">
                            <form id="addToCartForm" action="?act=cart" method="post">
                                <div class="thumbnail">
                                    <img src="./admin/img/<?= $galery_imgage ?>" alt="img_product" data-zoom-image="./admin/img/<?= $galery_imgage ?>">
                                </div>
                        </div>
                        <div class="thum-image">
                            <ul id="gallery_01" class="prev-thum">
                                <?php
                                $images = load_images_by_product($id);
                                foreach ($images as $image):
                                ?>
                                    <li>
                                        <a href="#" data-image="./admin/img/<?= $image['image'] ?>" data-zoom-image="./admin/img/<?= $image['image'] ?>">
                                            <img src="./admin/img/<?= $image['image'] ?>" alt="">
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="control-left" id="thum-prev" href="javascript:void(0);">
                                <i class="fa fa-chevron-left"> </i>
                            </a>
                            <a class="control-right" id="thum-next" href="javascript:void(0);">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="products-description">
                        <h3 class="name"><?= $name ?></h3>
                        <p><?= $description ?></p>

                        <div class="quantity-control">
                            <label for="quantity" style="font-weight: 400;">Số lượng</label>
                            <button type="button" id="decreaseQty" class="btn-qty">-</button>
                            <input class="quant" type="number" id="quantity" name="quantity" value="1" min="1" max="10" readonly>
                            <button type="button" id="increaseQty" class="btn-qty">+</button>
                        </div>



                        <div class="qty">
                            Màu sắc:
                            <select id="color" name="color">
                                <?php foreach ($colors as $color): ?>
                                    <option value="<?= htmlspecialchars($color) ?>"><?= htmlspecialchars($color) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="qty">
                            Kích thước
                            <select id="size" name="size">
                                <?php foreach ($sizes as $size): ?>
                                    <option value="<?= htmlspecialchars($size) ?>"><?= htmlspecialchars($size) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>




                        <div class="wided">
                            <div class="price" name="price">
                                Giá
                                <span class="old_price"><?= number_format($priceSale, 0, ',', '.') ?> ₫</span>
                                <span class="new_price" <?= number_format($price, 0, ',', '.') ?>> ₫</span>
                            </div>


                            <div class="button_group">
                                <input type="hidden" name="image" value="./admin/img/<?= $galery_imgage ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                 <!-- <input type="hidden" name="selected_size" id="selected_size" value="">
                                 <input type="hidden" name="selected_color" id="selected_color" value=""> -->
                                <!-- <input type="hidden" name="color" value="?= $selected_color ?>">
                                <input type="hidden" name="size" value="?= $selected_size ?>"> -->
                                <input type="hidden" id="hiddenPrice" name="price" value="">
                                <input type="hidden" name="soluong" value="Số lượng">
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <input class="dhang" type="submit" name="dathang" value="Thêm Vào Giỏ Hàng">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('addToCartForm').addEventListener('submit', function() {
        var selectedSize = document.getElementById('size').value;
        var selectedColor = document.getElementById('color').value;
        document.getElementById('selected_size').value = selectedSize;
        document.getElementById('selected_color').value = selectedColor;
    });

    var combinations = <?php echo json_encode($combinations); ?>;

    document.getElementById('color').addEventListener('change', function() {
        var selectedColor = this.value;
        var availableSizes = combinations[selectedColor] || [];

        var sizeSelect = document.getElementById('size');
        var sizeOptions = sizeSelect.options;

        for (var i = 0; i < sizeOptions.length; i++) {
            var size = sizeOptions[i].value;

            if (availableSizes.includes(size)) {
                sizeOptions[i].style.display = 'block'; // Hiển thị kích thước có sẵn
            } else {
                sizeOptions[i].style.display = 'none'; // Ẩn kích thước không có sẵn
            }
        }

        // Chọn kích thước đầu tiên nếu có sẵn
        sizeSelect.value = availableSizes.length > 0 ? availableSizes[0] : '';
    });
</script>


<div id="successmodall" class="modall">
    <div class="modall-content">
        <span class="close">&times;</span>
        <p>Thêm vào giỏ hàng thành công!</p>
        <a href="cart.php"><button class="shop-buttonn">Đi đến giỏ hàng</button></a>
    </div>
</div>