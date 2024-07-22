<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh mục BRAND</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listbs" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Status</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listbs  as $bill_status) {
                            extract($bill_status);
                            $suabr = "?act=updatebs&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $status ?></td>
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
                    <a href="index.php?act=addbs"><input class="mr20" type="button" value="Thêm status"></a>
                </div>
            </form>
        </div>
    </div>
</article>
