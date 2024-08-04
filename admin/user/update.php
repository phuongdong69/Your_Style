<article>
<div class="row2">
  <div class="row2 font_title">
    <h1>UPDATE USER</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php?act=updateRoleUser&id=<?= $_GET['id'] ?>" method="POST">
    <div class="row2 mb10">
        <label>Trạng thái</label><br>
        <select name="status" required>
          <option value="Đang hoạt động" <?= ($status == 'Đang hoạt động') ? 'selected' : '' ?>>Đang hoạt động</option>
          <option value="Ngừng hoạt động" <?= ($status == 'Ngừng hoạt động') ? 'selected' : '' ?>>Ngừng hoạt động</option>
          
        </select>
      </div>
      <div class="row2 mb10">
            <label> Vai trò </label> <br>
            <select name="id_role" id="">
                <?php foreach ($listrole as $listrol) :?>
                  <option value="<?= $listrol['id'] ?>" <?= $id_role == $listrol['id'] ? 'selected': '' ?>><?= $listrol['roleName'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
      <input class="mr20" type="submit" name="updateRoleUser" value="CẬP NHẬT">
      <a href="index.php?act=listuser"><input type="button" value="DANH SÁCH NGƯỜI DÙNG"></a>
      <?php
      if(isset($thongbao) &&($thongbao != "")){
        echo $thongbao;
      }
      ?>
    </form>
  </div>
</div>
</article>
