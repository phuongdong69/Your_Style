<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM MỚI VOUCHER</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=addvou" method="POST">

        <div class="row2 mb10">
          <label>Mã VOUCHER</label> <br>
          <input type="text" name="name" placeholder="" required>
        </div>


        <input class="mr20" type="submit" name="themvou" value="THÊM MỚI">
        <a href="index.php?act=listvou"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          }
        ?>
      </form>
    </div>
  </div>
</article>
