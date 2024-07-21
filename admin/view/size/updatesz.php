<article>
<div class="row2">
  <div class="row2 font_title">
    <h1>SỬA SIZE</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=updatesz&id=<?= $_GET['id'] ?>" method="POST">
      
      <div class="row2 mb10">
        <label>SIZE</label><br>
        <select name="sizeValue" required>
          <option value="S" <?= ($sizeValue == 'S') ? 'selected' : '' ?>>S</option>
          <option value="M" <?= ($sizeValue == 'M') ? 'selected' : '' ?>> M</option>
          <option value="L" <?= ($sizeValue == 'L') ? 'selected' : '' ?>> L</option>
          <option value="XL" <?= ($sizeValue == 'XL') ? 'selected' : '' ?>> XL</option>
          <option value="XXL" <?= ($sizeValue == 'XXL') ? 'selected' : '' ?>> XXL</option>
        </select>
      </div>
      <input class="mr20" type="submit" name="capnhatsize" value="CẬP NHẬT">
      <a href="index.php?act=listsz"><input type="button" value="DANH SÁCH SIZE"></a>
      <?php
      if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>
</article>
