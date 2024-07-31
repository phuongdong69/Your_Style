<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM ẢNH</h1>
    </div>
    <div class="row2 form_content ">
      <form action="#" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10">
            <label>HÌNH ẢNH </label> <br>
            <?php
                $img = $image;
            ?>
            <input type="file" name="image" >
            
            <?php
              $hinhPath = "./img/".$image;
              if(is_file($hinhPath)){
                $imgpath = " <img src='". $hinhPath."' style='width:100px;height:100px;' >";
              }else {
                $imgpath  = "không có ảnh";
              }
              echo $imgpath;
            ?>
           </div>

         

        <input class="mr20" type="submit" name="updateimg" value="Cập nhật">
        <a href="index.php?act=listsp"><input  class="mr20" type="button" value="Danh sách sản phẩm"></a>
        
        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>