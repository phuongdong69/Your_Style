<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>CHỈNH SỬA TIN TỨC</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=updatenews" method="POST" enctype="multipart/form-data">

        <!-- Trường ẩn để giữ ID của tin tức -->
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="row2 mb10">
          <label>Tiêu đề</label>
          <input type="text" name="title" placeholder="Nhập Tiêu đề" value="<?= $title ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Giới thiệu</label>
          <input type="text" name="intro" placeholder="Nhập giới thiệu" value="<?= $intro ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Chi tiết</label>
          <textarea name="detail" placeholder="Nhập chi tiết" required><?= $detail ?></textarea>
        </div>

        <div style="width: 200px;" class="row2 mb10">
          <label>Tạo lúc</label>
          <input type="datetime-local" name="create_at" value="<?= $create_at ?>">
        </div>

        <div class="row2 mb10">
          <label>Cập nhật lúc</label> <br>
          <input type="datetime-local" name="update_at" value="<?= $update_at ?>">
        </div>

        <input class="mr20" type="submit" name="capnhattintuc" value="CẬP NHẬT">
        <a href="index.php?act=listnews"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
      </form>
    </div>
  </div>
</article>
