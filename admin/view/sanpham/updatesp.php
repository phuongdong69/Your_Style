<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>CHỈNH SỬA SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>"> <!-- Hidden input for id -->
        <!-- <input type="hidden" name="existing_image" value="?= $product_image ?>"> Hidden field for existing image -->

        <div class="row2 mb10">
          <label>TÊN SẢN PHẨM</label> <br>
          <input type="text" name="name" placeholder="nhập vào tên sản phẩm" value="<?= $name ?>" required>
        </div>

        <!-- <div class="row2 mb10">
          <label>Hình ảnh</label><br>
            <input type="file" name="image" >
            
            <?php
              $hinhPath = "./img/".$galery_imgage;
              if(is_file($hinhPath)){
                $imgpath = " <img src='". $hinhPath."' style='width:100px;height:100px;' >";
              }else {
                $imgpath  = "không có ảnh";
              }
              echo $imgpath;
            ?>
        </div> -->
            
        <div class="row2 mb10">
          <label>Mô tả</label> <br>
          <input type="text" name="description" placeholder="nhập vào mô tả sản phẩm" value="<?= $description ?>" required>
        </div>

        <div class="row2 mb10">
            <label> Size </label> <br>
            <select name="id_size" id="">
                <?php foreach ($listsize as $listsiz) :?>
                  <option value="<?= $listsiz['id'] ?>" <?= $id_size == $listsiz['id'] ? 'selected': '' ?>><?= $listsiz['sizeValue'] ?></option>
                <?php endforeach; ?>
            </select>
        </div> 

        <div class="row2 mb10">
            <label> Color </label> <br>
            <select name="id_color" id="">
                <?php foreach ($listcolor as $listcol) :?>
                  <option value="<?= $listcol['id'] ?>" <?= $id_color == $listcol['id'] ? 'selected': '' ?>><?= $listcol['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row2 mb10">
            <label> Price </label> <br>
            <input type="text" name="price" placeholder="nhập giá sản phẩm" value="<?= $price ?>" required>
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

        <!-- <div class="row2 mb10">
          <label>cập nhật lúc</label> <br>
          <input type="datetime-local" name="update_at" placeholder="Cập nhật sản phẩm lúc" value="<?= $update_at ?>">
        </div> -->
        
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
