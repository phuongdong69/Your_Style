<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh sách Bill</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listbill" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Ngày Tạo</th>
                            <th>id_user</th>
                            <th>Tên</th>
                            <th>Số Điện Thoại</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $suabill = "?act=updatebill&id=".$id;
                          $listbd = "?act=listbdt&id_bill=".$id;
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $creat_at?></td>
                            <td><?= $id_user ?></td>
                            <td><?= $name ?></td>
                            <td><?= $phoneNumber?></td>
                            <td><?= $email ?></td>
                            <td><?= $address ?></td>
                            <td>
                            <a href="<?= $suabill ?>">
                                <input type="button" value="Sửa">
                                </a>
                                <a href="<?= $listbd ?>">
                                <input type="button" value="xem chi tiết">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="?act=addbill"><input class="mr20" type="button" value="Thêm Bill"></a>
                </div>
            </form>
        </div>
    </div>
</article>
