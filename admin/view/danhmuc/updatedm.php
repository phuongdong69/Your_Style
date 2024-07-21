<article>
<div class="row2">
  <div class="row2 font_title">
    <h1>SỬA DANH MỤC</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=updatedm&id=<?= $_GET['id'] ?>" method="POST">
      <div class="row2 mb10">
        <label>Tên danh mục</label><br>
        <input type="text" name="name" placeholder="Nhập vào tên danh mục" value="<?= $name ?>">
      </div>
      <div class="row2 mb10">
        <label>Trạng thái</label><br>
        <select name="status" required>
          <option value="Mùa xuân" <?= ($status == 'Mùa xuân') ? 'selected' : '' ?>>Mùa xuân</option>
          <option value="Mùa hạ" <?= ($status == 'Mùa hạ') ? 'selected' : '' ?>>Mùa hạ</option>
          <option value="Mùa thu" <?= ($status == 'Mùa thu') ? 'selected' : '' ?>>Mùa thu</option>
          <option value="Mùa đông" <?= ($status == 'Mùa đông') ? 'selected' : '' ?>>Mùa đông</option>
        </select>
      </div>
      <input class="mr20" type="submit" name="capnhatdanhmuc" value="CẬP NHẬT">
      <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
      <?php
      if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>
</article>
