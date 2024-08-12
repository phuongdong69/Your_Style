<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh sách Vou</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listvou" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>id</th>
                            <th>Mã Voucher</th>
                            <th>Chức Năng</th>
                        </tr>
                        <?php
                        // var_dump($listvou);
                        foreach ($listvou as $vou) {
                            extract($vou);
                            $suavou = "?act=updatevou&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name?></td>
                        
                            <td>
                            <a href="<?= $suavou ?>">
                                <input type="button" value="Sửa">
                                </a>
                                
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="?act=addvou"><input class="mr20" type="button" value="Thêm voucher"></a>
                </div>
            </form>
        </div>
    </div>
</article>
