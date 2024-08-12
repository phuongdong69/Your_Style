<article>
<div class="row2">
  <div class="row2 font_title">
    <h1>SỬA VOU</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=updatevou&id=<?= $_GET['id'] ?>" method="POST">
      
      <div class="row2 mb10">
        <label>Tên</label> <br>
        <input type="text" name="name" value="<?= $name ?>" required>
      </div>
      <input class="mr20" type="submit" name="capnhatvou" value="CẬP NHẬT">
      <a href="index.php?act=listvou"><input type="button" value="DANH SÁCH SIZE"></a>
      <?php
      if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>
</article>
