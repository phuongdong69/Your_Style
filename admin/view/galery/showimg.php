<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Hình ảnh sản phẩm</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=showimg&id=<?= $id_product ?>" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Hình ảnh</th>
                            <!-- <th>Mã sản phẩm</th> -->
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listanh as $gallery) {
                            extract($gallery);
                            $imgPath = "./img/" . $image;
                            $updateimg = "?act=updateimg&id=" . $id;
                            $addimg_pro = "?act=addimg&id_product=" . $id_product;
                            // $xoaUrl = "?act=deleteimg&id=" . $id;
                        ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td>
                                    <img src="<?= $imgPath ?>" alt="" width="100px" height="100px"><?= $imgPath ?>
                                </td>
                                <!-- <td>?= $id_product ?></td> -->
                                <td>
                                    <a href="<?= $updateimg ?>">
                                        <input type="button" value="Sửa">
                                    </a>
                                    <!-- <a onclick="return confirm('Bạn có muốn xoá không?')" href="?= $xoaUrl ?>">
                                        <input type="button" value="Xóa">
                                    </a> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="<?= $addimg_pro ?>"><input class="mr20" type="button" value="Thêm ảnh"></a>
                    <a href="index.php?act=listsp"><input class="mr20" type="button" value="Danh sách sản phẩm"></a>

                </div>
            </form>
        </div>
    </div>
</article>