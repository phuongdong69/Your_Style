<?php
$hinhpath = "../admin/img/".$img;
if(is_file($hinhpath)){
  $imgTag = "<img src='".$hinhpath."' width='120px' height='80px'>";
} else {
  $imgTag = "No Photo";
}
?>                

<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>CHỈNH SỬA SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>"> <!-- Hidden input for id -->
        <input type="hidden" name="existing_image" value="<?= $img ?>"> <!-- Hidden field for existing image -->

        <div class="row2 mb10">
          <label>TÊN SẢN PHẨM</label> <br>
          <input type="text" name="name" placeholder="nhập vào tên sản phẩm" value="<?= $name ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Hình ảnh</label><br>
          <?= $imgTag ?>
          <input type="file" name="hinh">
        </div>
            
        <div class="row2 mb10">
          <label>Mô tả</label> <br>
          <input type="text" name="description" placeholder="nhập vào mô tả sản phẩm" value="<?= $description ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Giá sale</label> <br>
          <input type="number" name="priceSale" placeholder="nhập giá sale" value="<?= $priceSale ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Số lượng</label> <br>
          <input type="number" name="quantity" placeholder="nhập số lượng" value="<?= $quantity ?>" required>
        </div>

        <div class="row2 mb10">
          <label>Trạng thái</label> <br>
          <select name="status" required>
            <option value="còn hàng" <?= $status == "còn hàng" ? 'selected' : '' ?>>Còn hàng</option>
            <option value="hết hàng" <?= $status == "hết hàng" ? 'selected' : '' ?>>Hết hàng</option>
          </select>
        </div>

        <div class="row2 mb10">
          <label>cập nhật lúc</label> <br>
          <input type="datetime-local" name="update_at" placeholder="Cập nhật sản phẩm lúc" value="<?= $update_at ?>">
        </div>
        
        <div class="row2 mb10">
          <label>danh mục</label> <br>
          <select name="id_cate" required>
            <?php foreach ($listdanhmuc as $category): ?>
            <option value="<?= $category['id'] ?>" <?= $id_cate == $category['id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="row2 mb10">
          <label>brand</label> <br>
          <select name="id_brands" required>
            <?php foreach ($listbrands as $brand): ?>
            <option value="<?= $brand['id'] ?>" <?= $id_brands == $brand['id'] ? 'selected' : '' ?>><?= $brand['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <input class="mr20" type="submit" name="capnhatsanpham" value="CẬP NHẬT">
        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
          }
        ?>
      </form>
    </div>
  </div>
</article>
