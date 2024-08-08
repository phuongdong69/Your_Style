
<div style="padding-top: 0px;" class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    <div class="preview_image">
                        <div class="preview-small">
                            <form id="addToCartForm" action="?act=addtocart" method="post">
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
                            <input class="quant" type="number" id="quantity" name="quantity" value="1" min="1" max="<?= $quantity ?>" readonly>
                            <button type="button" id="increaseQty" class="btn-qty">+</button>
                        </div>
                        <div class="qty">
                            Size
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
                        <div class="wided">
                            <div class="price">
                                Giá
                                <span class="new_price"><?= number_format($priceSale, 0, ',', '.') ?>  VNĐ</span>
                                <span class="old_price"><?= number_format($price, 0, ',', '.')?> VNĐ</span>
                            </div>
                            <div class="button_group">
                                <input type="hidden" name="image" value="./admin/img/<?= $galery_imgage ?>">
                                <input type="hidden" name="name" value="<?= $name ?>">
                                <input type="hidden" name="color" value="<?= $color['name'] ?>">
                                <input type="hidden" name="size" value="<?= $size['sizeValue'] ?>">
                                <input type="hidden" name="price" value="<?= $priceSale ?>">
                                <input type="hidden" name="soluong" value="Số lượng">
                                <input type="hidden" name="id" value="1">
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

<!-- <div id="successmodall" class="modall">
    <div class="modall-content">
        <span class="close">&times;</span>
        <p style="color: red; font-size: 18px;">Thêm vào giỏ hàng thành công!</p>
        <a href="?act=cart"><button class="shop-buttonn">Đi đến giỏ hàng</button></a>
    </div>
</div> -->

<!-- <script>
    document.getElementById('addToCartForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        var modall = document.getElementById('successmodall');
        var span = document.getElementsByClassName('close')[0];
        modall.style.display = 'block';

        span.onclick = function() {
            modall.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == modall) {
                modall.style.display = 'none';
            }
        }
    });
</script> -->

<!-- <div style="padding-top: 0px;" class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    
                    <div class="preview_image">
                        <div class="preview-small"> -->
                            <!-- <img id="zoom_03" src="?= $imgage ?>" data-zoom-image="?= $galery_imgage ?>" alt=""> -->
                             <!-- <form action="?act=addtocart" method="post">
                            <div class="thumbnail">
                                <img src="./admin/img/<?= $galery_imgage ?>" alt="img_product" data-zoom-image="./admin/img/<?= $galery_imgage ?>"></a>
                            </div>
                        </div>
                        <div class="thum-image">
                            <ul id="gallery_01" class="prev-thum">
                                <?php 
                                    // $images = load_images_by_product($id); 
                                    // foreach ($images as $image): 
                                    ?>
                                    <li>
                                        <a href="#" data-image="./admin/img/<?= $image['image'] ?>" data-zoom-image="./admin/img/<?= $image['image'] ?>">
                                            <img src="./admin/img/<?= $image['image'] ?>" alt="">
                                        </a>
                                    </li>
                                <?php 
                            // endforeach; 
                            ?>
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
                    Sản Phẩm -->
                        <!-- Tên sản phẩm -->
                        <!-- <h3 class="name"><?= $name ?></h3> -->
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
                         <!-- <div class="quantity-control">
                            <label for="quantity" style="font-weight: 400;">Số lượng</label>
                            <button type="button" id="decreaseQty" class="btn-qty">-</button>
                            <input class="quant" type="number"  id="quantity" name="quantity" value="1" min="1" max="<?= $quantity ?>" readonly>
                            <button type="button" id="increaseQty" class="btn-qty">+</button>
                        </div>
                        <br>
                        <div class="qty">
                            Size
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
                                Giá
                                <span class="new_price"><?= number_format($priceSale, 0, ',', '.') ?>  VNĐ</span>
                                <span class="old_price"><?= number_format($price, 0, ',', '.')?> VNĐ</span>
                            </div>
                            <br>
                            <br> -->
                            <!-- </form>
                            <form action="addtocart" method="post"> -->
                            <!-- <div class="button_group"> -->
                                <!-- <button class="button" > Mua ngay </button> -->
                                <!-- <form action="index.php?act=addtocart" method="post"> -->
                                    <!-- <input type="hidden" name="image" value="./admin/img/<?= $galery_imgage ?>">
                                    <input type="hidden" name="name" value="<?= $name ?>">
                                    <input type="hidden" name="color" value="<?= $color['name'] ?>">
                                     <input type="hidden" name="size" value="<?= $size['sizeValue'] ?>">
                                    <input type="hidden" name="price" value="<?= $priceSale ?>">
                                    <input type="hidden" name="soluong" value="Số lượng">
                                    <input type="hidden" name="id" value="1">
                                    <input class="dhang" type="submit" name="dathang" value="Thêm Vào Giỏ Hàng"> -->
                                <!-- </form> -->

                                <!-- <button class="button" >Thêm vào giỏ hàng</button> -->
                                <!-- <button class="button favorite"><i class="fa fa-heart-o"></i></button>  -->
                            <!-- </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <script>
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
</script> -->
<div id="successmodall" class="modall">
    <div class="modall-content">
        <span class="close">&times;</span>
        <p>Thêm vào giỏ hàng thành công!</p>
        <a href="cart.php"><button class="shop-buttonn">Đi đến giỏ hàng</button></a>
    </div>
</div>

