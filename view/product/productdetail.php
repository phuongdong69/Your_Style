<div class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    <?php 
                        extract($onesp);
                    ?>
                    <div class="preview_image">
                        <div class="preview-small">
                            <!-- <img id="zoom_03" src="?= $imgage ?>" data-zoom-image="?= $galery_imgage ?>" alt=""> -->
                             
                            <img id="zoom_03" src="<?= $imgage ?>" data-zoom-image="<?= $galery_imgage ?>" alt="">
                        </div>
                        <div class="thum-image">
                            <ul id="gallery_01" class="prev-thum">
                                <!-- ?php 
                                    $images = load_images_by_product($id); 
                                    foreach ($images as $image): 
                                ?>
                                    <li>
                                        <a href="#" data-image="images/products/medium/?= $image['image'] ?>" data-zoom-image="images/products/Large/<?= $image['image'] ?>">
                                            <img src="images/products/thum/?= $image['image'] ?>" alt="">
                                        </a>
                                    </li>
                                ?php endforeach; ?> -->
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
                        <!-- Trạng thái -->
                        <br>
                        <br>
                        <h4>
                            <p>Trạng thái: <span class="light-red"><?= $status ?></span></p>
                        </h4>
                        <!-- Mô tả -->
                        <br>
                        <br>
                        <p><?= $description ?></p>
                        <br>
                        <br>
                        <!-- Giá -->
                        <div class="qty">
                            Số lượng: 
                            <select id="quantity" name="quantity">
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?= $i ?>" <?= $i == $quantity ? 'selected' : '' ?>><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
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
