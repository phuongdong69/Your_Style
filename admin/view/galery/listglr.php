<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Thư viện ảnh</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=showglr" method="POST">
                <div class="row2 mb10 formds_loai">
                <table border="1">
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Ảnh</th>
                </tr>
                <?php
                foreach ($listSanPham as $product) {
                    $product_id = $product['id'];
                    $product_name = $product['name'];
                    $product_images = load_images_by_product($product_id);
                ?>
                <tr>
                    <td><?= $product_id ?></td>
                    <td><?= $product_name ?></td>
                    <td>
                        <?php foreach ($product_images as $image): ?>
                            <img src="../admin/img/<?= $image['image'] ?>" width="100px" height="75px">
                        <?php endforeach; ?>
                    </td>
                    <!-- <td>
                        <a href="?act=updateglr&id=?= $product_id ?>">
                            <input type="button" value="Sửa ảnh">
                        </a>
                    </td> -->
                </tr>
                <?php } ?>
            </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=listsp"><input class="mr20" type="button" value="Danh sách sản phẩm"></a>
                </div>
            </form>
        </div>
    </div>
</article>