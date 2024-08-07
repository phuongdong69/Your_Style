<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM MỚI TIN TỨC</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=addnews" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label> Tiêu đề </label>
          <input type="text" name="title" placeholder="Nhập Tiêu đề" required>
        </div>

        <div class="row2 mb10">
          <label> Giới thiệu </label>
          <input type="text" name="intro" placeholder="Nhập giới thiệu" required>
        </div>
       
        <div class="row2 mb10">
          <label> Chi tiết </label>
          <textarea name="detail" placeholder="Nhập chi tiết" required></textarea>
        </div>

        <div style="width: 200px;" class="row2 mb10">
          <label>Tạo lúc</label>
          <input type="datetime-local" name="creat_at" placeholder="tạo tin tức lúc">
        </div>

        <div style="width: 200px;" class="row2 mb10">
          <label>Cập nhật lúc</label>
          <input type="datetime-local" name="update_at" placeholder="cập nhật tin tức lúc">
        </div>

        <input class="mr20" type="submit" name="themtintuc" value="THÊM MỚI">
        <a href="index.php?act=listnews"><input class="mr20" type="button" value="DANH SÁCH"></a>
        
        <!-- Hiển thị thông báo -->
        <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
        ?>
      </form>
    </div>
  </div>
</article>
