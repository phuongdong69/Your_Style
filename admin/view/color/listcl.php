<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh mục COLOR</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listcl" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Màu</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listcolor  as $color) {
                            extract($color);
                            $suacl = "?act=updatecl&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $name ?></td>
                            <td>
                                <a href="<?= $suacl ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addcl"><input class="mr20" type="button" value="Thêm color"></a>
                </div>
            </form>
        </div>
    </div>
</article>
