<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM BRAND</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=addbr" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label> Brand </label> <br>
          <input type="text" name="name" placeholder="nhập vào tên brand" required>
        </div>
        <input class="mr20" type="submit" name="thembrand" value="THÊM MỚI">
        <a href="index.php?act=listbr"><input  class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>