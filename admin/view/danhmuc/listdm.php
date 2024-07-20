<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh mục sản phẩm</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listdm" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listcategory as $category) {
                            extract($category);
                            $suadm = "?act=updatedm&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id_cate?></td>
                            <td><?= $name_cate ?></td>
                            <td><?= $status_cate ?></td>
                            <td>
                                <a href="<?= $suadm ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=adddm"><input class="mr20" type="button" value="Thêm danh mục"></a>
                </div>
            </form>
        </div>
    </div>
</article>
