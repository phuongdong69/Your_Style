<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM MỚI BILL</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=addbill" method="POST">
       

        <!-- <div style="width: 200px;" class="row2 mb10">
          <label>Tạo Lúc</label> <br>
          <input type="datetime-local" name="creat_at" placeholder="Tạo sản phẩm lúc">
        </div> -->


      

        <div class="row2 mb10">
          <label>Tên khách hàng</label> <br>
          <input type="text" name="name" placeholder="Tên" required>
        </div>

        <div class="row2 mb10">
          <label>Số Điện Thoại</label> <br>
          <input type="number" name="phoneNumber" placeholder="Số Điện Thoại" required>
        </div>


        <div class="row2 mb10">
          <label>Email </label> <br>
          <input type="text" name="email" placeholder="Email" required>
        </div>

        <div class="row2 mb10">
          <label>Địa Chỉ</label> <br>
          <input type="text" name="address" placeholder="Địa Chỉ" required>
        </div>

        <!-- chi tiết đơn hàng -->
        <div style="width: 200px;" class="row2 mb10">
          <label>Mã Sản Phẩm</label> <br>
          <select name="id_product" required>
            <?php foreach ($listproduct as $product): ?>
            <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- <div style="width: 200px;" class="row2 mb10">
          <label>Mã Voucher</label> <br>
          <select name="id_voucher">
            <option value=""></option>
            <option value="1">50</option>
            <option value="2">100</option>
          </select>
        </div> -->

        <div style="width: 200px;" class="row2 mb10">
          <label>Mã Trạng Thái Đơn Hàng</label> <br>
          <select name="id_bill_status" required>
            <?php foreach ($listbs as $bill_status): ?>
            <option value="<?= $bill_status['id'] ?>"><?= $bill_status['status'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="row2 mb10">
          <label>Số Lượng</label> <br>
          <input type="number" name="quantity" placeholder="Nhập Số Lượng" required>
        </div>

        <div class="row2 mb10">
          <label>Hình Thức Thanh Toán</label> <br>
          <select name="payment" required>
            <option value="nhận hàng mới thanh toán">Nhận Hàng Mới Thanh Toán</option>
            <option value="chuyển khoản">Chuyển Khoản</option>
          </select>
        </div>

        <div class="row2 mb10">
          <label>Ghi Chú</label> <br>
          <input type="text" name="note" placeholder="Nhập Ghi Chú">
        </div>

        <input class="mr20" type="submit" name="thembill" value="THÊM MỚI">
        <a href="index.php?act=listbill"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          }
        ?>
      </form>
    </div>
  </div>
</article>
