<div class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    
                    <div class="preview_image">
                        <div class="preview-small">
                            <!-- <img id="zoom_03" src="?= $imgage ?>" data-zoom-image="?= $galery_imgage ?>" alt=""> -->
                            <div class="thumbnail"><img src="./admin/img/<?= $galery_imgage ?>" alt="img_product" data-zoom-image="./admin/img/<?= $galery_imgage ?>"></a></div>
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
                        <!-- Tên sản phẩm -->
                        <h3 class="name"><?= $name ?></h3>
                        <!-- Trạng thái 
                        <br>
                        <br>
                        <h4>
                            <p>Trạng thái: <span class="light-red">< ?= $status ?></span></p>
                        </h4>-->
                        <!-- Mô tả 
                        <br>
                        <br>-->
                        <p><?= $description ?></p>
                        <!--<br>
                        <br>
                         Giá -->
                         <div class="quantity-control">
                            <label for="quantity">Số lượng:</label>
                            <button type="button" id="decreaseQty" class="btn-qty">-</button>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="<?= $quantity ?>" readonly>
                            <button type="button" id="increaseQty" class="btn-qty">+</button>
                        </div>
                        <br>
                        <div class="qty">
                            Size: 
                            <select id="size" name="id_size">
                                <?php foreach ($listsize as $size): ?>
                                    <option value="<?= $size['id'] ?>" <?= $id_size == $size['id'] ? 'selected' : '' ?>><?= $size['sizeValue'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="qty">
                            Color: 
                            <select id="color" name="id_color">
                                <?php foreach ($listcolor as $color): ?>
                                    <option value="<?= $color['id'] ?>" <?= $id_color == $color['id'] ? 'selected' : '' ?>><?= $color['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="wided">
                            <div class="price">
                                Giá: 
                                <span class="new_price"><?= number_format($priceSale, 0, ',', '.') ?>  VNĐ</span>
                                <span class="old_price"><?= number_format($price, 0, ',', '.')?> VNĐ</span>
                            </div>
                            <br>
                            <br>
                            <div class="button_group">
                                <button class="button" > Mua ngay </button>
                                <button class="button" >Thêm vào giỏ hàng</button>
                                <button class="button favorite"><i class="fa fa-heart-o"></i></button> <!--yêu thích sản phẩm -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Điều chỉnh ảnh lớn khi click vào ảnh thu nhỏ
        var thumbnails = document.querySelectorAll('#gallery_01 a');
        var mainImage = document.querySelector('.preview-small img');
        
        thumbnails.forEach(function(thumbnail) {
            thumbnail.addEventListener('click', function(e) {
                e.preventDefault();
                var largeImageSrc = this.getAttribute('data-image');
                var zoomImageSrc = this.getAttribute('data-zoom-image');
                mainImage.setAttribute('src', largeImageSrc);
                mainImage.setAttribute('data-zoom-image', zoomImageSrc);
            });
        });

        var quantityInput = document.getElementById('quantity'); // Hiển thị số lượng sản phẩm
        var increaseBtn = document.getElementById('increaseQty'); // Tăng số lượng sản phẩm
        var decreaseBtn = document.getElementById('decreaseQty'); // Giảm số lượng sản phẩm
        var maxQuantity = 10; // Giới hạn số lượng tối đa thành 10

        increaseBtn.addEventListener('click', function() {
            var currentQuantity = parseInt(quantityInput.value);
            var maxQuantityFromInput = parseInt(quantityInput.getAttribute('max')); // Lấy giá trị max từ thuộc tính input
            if (currentQuantity < Math.min(maxQuantity, maxQuantityFromInput)) {
                quantityInput.value = currentQuantity + 1;
            }
        });

        decreaseBtn.addEventListener('click', function() {
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        });
    });
</script>
