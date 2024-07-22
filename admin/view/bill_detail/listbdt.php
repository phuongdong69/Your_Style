<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Chi tiết đơn hàng</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listbdt" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>mã sản phẩm</th>
                            <th>mã đơn hàng</th>
                            <th>mã voucher</th>
                            <th>mã trạng thái đơn hàng</th>
                            <th>Số lượng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Ghi chú</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listbdt as $billdetail) {
                            extract($billdetail);
                            $suabdt = "?act=updatebdt&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $id_product ?></td>
                            <td><?= $id_bill ?></td>
                            <td><?= $id_voucher ?></td>
                            <td><?= $id_bill_status ?></td>
                            <td><?= $quantity ?></td>
                            <td><?= $payment ?></td>
                            <td><?= $note ?></td>
                            <td>
                                <a href="<?= $suabdt ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addbdt"><input class="mr20" type="button" value="Thêm Sản Phẩm"></a>
                </div>
            </form>
        </div>
    </div>
</article>
