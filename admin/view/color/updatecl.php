<article>
<div class="row2">
  <div class="row2 font_title">
    <h1>SỬA COLOR</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=updatecl&id=<?= $_GET['id'] ?>" method="POST">
      <div class="row2 mb10">
        <label>Color</label><br>
        <input type="text" name="name" value="<?= $name ?>">
      </div>
      <input class="mr20" type="submit" name="capnhatcolor" value="CẬP NHẬT">
      <a href="index.php?act=listcl"><input type="button" value="DANH SÁCH"></a>
      <?php
      if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>
</article>
