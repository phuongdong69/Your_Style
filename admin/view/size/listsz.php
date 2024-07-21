<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh mục Size</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listsz" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Size</th>
                            <th>Chức Năng</th>
                          
                        </tr>
                        <?php
                        foreach ($listsize as $size) {
                            extract($size);
                            $suasz = "?act=updatesz&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $sizeValue ?></td>
                            <td>
                                <a href="<?= $suasz ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addsz"><input class="mr20" type="button" value="Thêm size"></a>
                </div>
            </form>
        </div>
    </div>
</article>
