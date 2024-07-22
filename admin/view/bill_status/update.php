<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>Sửa trạng thái đơn hàng</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=updatebs&id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label> Status </label> <br>
          <input type="text" name="status" placeholder="nhập tên trạng thái" value="<?= $status?>" required>
          <input type="hidden" name="id" value="<?= $id ?>">
        </div>
        <input class="mr20" type="submit" name="updatebs" value="Cập nhật">
        <a href="index.php?act=listbs"><input  class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>
