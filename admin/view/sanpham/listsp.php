<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh Sách Sản Phẩm Hiện Có</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listsp" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Giá gốc</th>
                            <th>Giá sale</th>
                            <th>Số lượng</th>
                            <th>Trạng thái</th>
                            <th>Tạo lúc</th>
                            <th>Cập nhật lúc</th>
                            <th>Danh mục</th>
                            <th>Brand</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listSanPham as $product) {
                            extract($product);
                            $suaUrl = "?act=updatesp&id=".$id;
                            $img = "?act=showimg&id_product=".$id;
                            $id_product = $id;
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <td><?= $description ?></td>
                            <td><?= $price ?></td>
                            <td><?= $priceSale ?></td>
                            <td><?= $quantity ?></td>
                            <td><?= $status ?></td>
                            <td><?= $create_at ?></td>
                            <td><?= $update_at ?></td>
                            <td><?= $id_cate ?></td>
                            <td><?= $id_brands ?></td>
                            <td>
                                <a href="<?= $suaUrl ?>">
                                <input type="button" value="Sửa">
                                </a>
<<<<<<< HEAD
                                <a href="<?= $img ?>">
                                <input type="button" value="img">
                                </a>
=======

                                <a href="<?= $img ?>">
                                <input type="button" value="img">
                                </a>

>>>>>>> efa7db58e1092f52a39b3bae25ac26c25c08659a
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addsp"><input class="mr20" type="button" value="Thêm Sản Phẩm"></a>
                </div>
            </form>
        </div>
    </div>
</article>
