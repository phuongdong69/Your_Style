<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM SIZE</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=addsz" method="POST" enctype="multipart/form-data">
        

        <div class="row2 mb10">
          <label>Chọn Size</label> <br>
          <select name="sizeValue" required>
            <option value="" hidden></option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
        </div>

        <input class="mr20" type="submit" name="themsize" value="THÊM MỚI">
        <a href="index.php?act=listsz"><input  class="mr20" type="button" value="DANH SÁCH SIZE"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>