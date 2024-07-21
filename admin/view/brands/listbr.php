<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh mục BRAND</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listbr" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Brand</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listbrands  as $brands) {
                            extract($brands);
                            $suabr = "?act=updatebr&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $name ?></td>
                            <td>
                                <a href="<?= $suabr ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addbr"><input class="mr20" type="button" value="Thêm brand"></a>
                </div>
            </form>
        </div>
    </div>
</article>
