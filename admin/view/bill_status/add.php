<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>Thêm trạng thái đơn hàng</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=addbs" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label> Status </label> <br>
          <input type="text" name="status" placeholder="nhập tên trạng thái" required>
        </div>
        <input class="mr20" type="submit" name="thembs" value="THÊM MỚI">
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