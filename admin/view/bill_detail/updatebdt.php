<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>Chỉnh sửa chi tiết sản phẩm</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=updatebdt" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div style="width: 200px;" class="row2 mb10">
          <label>mã sản phẩm</label> <br>
          <select name="id_product" required>
            <?php foreach ($listSanPham as $product): ?>
            <option value="<?= $product['id'] ?>" <?= $id_product == $product['id'] ? 'selected' : '' ?>>
              <?= $product['name'] ?>
            </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div style="width: 200px;" class="row2 mb10">
          <label>mã đơn hàng</label> <br>
          <select name="id_bill" required>
            <?php foreach ($listbill as $bill): ?>
            <option value="<?= $bill['id'] ?>" <?= $id_bill == $bill['id'] ? 'selected' : '' ?>>
              <?= $bill['id'] ?>
            </option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- <div style="width: 200px;" class="row2 mb10">
          <label>mã voucher</label> <br>
          <select name="id_voucher">
            <option value=""></option>
            <option value="1" <?= $id_voucher == "1" ? 'selected' : '' ?>>giảm 50k</option>
            <option value="2" <?= $id_voucher == "2" ? 'selected' : '' ?>>giảm 100k</option>
          </select>
        </div> -->

        <div style="width: 200px;" class="row2 mb10">
          <label>mã trạng thái đơn hàng</label> <br>
          <select name="id_bill_status" required>
            <?php foreach ($listbs as $bill_status): ?>
            <option value="<?= $bill_status['id'] ?>" <?= $id_bill_status == $bill_status['id'] ? 'selected' : '' ?>>
              <?= $bill_status['status'] ?>
            </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="row2 mb10">
          <label>Số lượng</label> <br>
          <input type="number" name="quantity" placeholder="nhập số lượng" value="<?= $quantity ?>" required>
        </div>

        <div class="row2 mb10">
          <label>hình thức thanh toán</label> <br>
          <select name="payment" required>
            <option value="nhận hàng mới thanh toán" <?= $payment == "nhận hàng mới thanh toán" ? 'selected' : '' ?>>nhận hàng mới thanh toán</option>
            <option value="chuyển khoản" <?= $payment == "chuyển khoản" ? 'selected' : '' ?>>chuyển khoản</option>
          </select>
        </div>

        <div class="row2 mb10">
          <label>ghi chú</label> <br>
          <input type="text" name="note" placeholder="nhập ghi chú" value="<?= $note ?>">
        </div>

        <input class="mr20" type="submit" name="capnhatbdt" value="CẬP NHẬT">
        <a href="index.php?act=listbill"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
        ?>
      </form>
    </div>
  </div>
</article>
