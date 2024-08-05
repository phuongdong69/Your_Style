<div class="container_fullwidth">
    <div class="container">
        <!-- <h3 class="title"><strong>Danh mục ?= $name ?></strong></h3> -->
        <h3 class="title"><strong>Sản Phẩm</strong> sản phẩm</h3>
        <ul id="hot">
            <li>
                <div class="row">
                    <?php
                    foreach ($listSanPham as $sp) {
                        extract($sp);
                        $linkUrl = "?act=sanphamct&id=" . $id;
                        $imgPath = "./admin/img/" . $galery_imgage;
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="products">
                            <div class="offer">New</div>
                            <div class="offer">- 85%</div>
                            <div style="height: 330px;" class="thumbnail">
                                <a href="<?= $linkUrl ?>"><img src="<?= $imgPath ?>" alt="Product Name"></a>
                            </div>
                            <div class="productname"><?= $name ?></div>
                            <h4 class="price"><?= $price ?> VNĐ</h4>
                            <div class="button_group">
                                <!-- Các nút hoặc thông tin khác -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </li>
        </ul>
    </div>
</div>
