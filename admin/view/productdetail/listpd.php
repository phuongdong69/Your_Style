<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh sách chi tiết sản phẩm</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listpd" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>STT</th>
                            <th>Mã sản phẩm</th>
                            <th>Giá</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listpd as $product) {
                            extract($product);
                            $suaUrl = "?act=updatepd&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $id_product ?></td>
                            <td><?= $price?></td>
                            <td><?= $size_sizeValue ?></td>
                            <td><?= $color_name ?></td>
                            <td>
                                <a href="<?= $suaUrl ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="?act=addpd"><input class="mr20" type="button" value="Thêm chi tiết sản phẩm"></a>
                    <a href="?act=listsp"><input class="mr20" type="button" value="Danh sách sản phẩm"></a>
                </div>
            </form>
        </div>
    </div>
</article>
