<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>CHỈNH SỬA Bill</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=updatebill" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>"> <!-- Hidden input for id -->
        
        <div class="row2 mb10">
          <label>Ngày Tạo</label> <br>
          <input type="datetime-local" name="creat_at" value="<?= $creat_at ?>" required>
        </div>
        
        <div class="row2 mb10">
          <label>ID User</label> <br>
          <input type="hidden" name="id_user" value="<?= $id_user ?>">
        </div>
        
        <div class="row2 mb10">
          <label>Tên</label> <br>
          <input type="text" name="name" value="<?= $name ?>" required>
        </div>
        
        <div class="row2 mb10">
          <label>SDT</label> <br>
          <input type="number" name="phoneNumber" value="<?= $phoneNumber ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Email</label> <br>
          <input type="email" name="email" value="<?= $email ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Địa Chỉ</label> <br>
          <input type="text" name="address" value="<?= $address ?>" required>
        </div>

        <input class="mr20" type="submit" name="capnhatbill" value="CẬP NHẬT">
        <a href="index.php?act=listbill"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php if (isset($thongbao) && $thongbao != "") {
            echo $thongbao;
        } ?>
      </form>
    </div>
  </div>
</article>
