<article>
<div class="row2">
  <div class="row2 font_title">
    <h1>UPDATE ROLE</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=updaterole&id=<?= $_GET['id'] ?>" method="POST">
      
      <div class="row2 mb10">
        <label>ROLE</label><br>
        <input type="text" name="roleName" value="<?= $roleName ?>" placeholder="thêm vai trò">
      </div>
      <input class="mr20" type="submit" name="capnhatrole" value="CẬP NHẬT">
      <a href="index.php?act=listrole"><input type="button" value="DANH SÁCH ROLE"></a>
      <?php
      if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>
</article>
