<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM MỚI BILL</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=addbill" method="POST">
       

        <div style="width: 200px;" class="row2 mb10">
          <label>Tạo Lúc</label> <br>
          <input type="datetime-local" name="creat_at" placeholder="Tạo sản phẩm lúc">
        </div>


      

        <div class="row2 mb10">
          <label>Name</label> <br>
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
