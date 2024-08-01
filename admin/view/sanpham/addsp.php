<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content">
      <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label> TÊN SẢN PHẨM </label>
          <input type="text" name="name" placeholder="nhập vào tên sản phẩm" required>
        </div>

        <div class="row2 mb10">
          <label>Hình ảnh</label>
          <input type="file" name="hinh" required>
        </div>
        <div class="row2 mb10">
          <label>Nhiều ảnh</label>
          <input type="file" name="hinhs[]" multiple="multiple" required>
        </div>
            
        <div class="row2 mb10">
          <label>Mô tả</label>
          <input type="text" name="description" placeholder="nhập vào mô tả sản phẩm" required>
        </div>

        <div class="row2 mb10">
          <label>Giá sale </label>
          <input type="number" name="priceSale" placeholder="nhập giá sale" required>
        </div>

        <div class="row2 mb10">
          <label>Số lượng</label>
          <input type="number" name="quantity" placeholder="nhập số lượng" required>
        </div>

        <div class="row2 mb10">
          <label>Trạng thái</label>
          <select name="status" required>
            <option value="còn hàng">Còn hàng</option>
            <option value="hết hàng">Hết hàng</option>
          </select>
        </div>

        <!-- <div style="width: 200px;" class="row2 mb10">
          <label>Tạo lúc</label>
          <input type="datetime-local" name="create_at" placeholder="Tạo sản phẩm lúc">
        </div>

        <div style="width: 200px;" class="row2 mb10">
          <label>Cập nhật lúc</label>
          <input type="datetime-local" name="update_at" placeholder="Tạo sản phẩm lúc">
        </div> -->

        <div style="width: 200px;" class="row2 mb10">
          <label>Danh mục</label>
          <select name="id_cate" required>
            <?php foreach ($listdanhmuc as $category): ?>
            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div style="width: 200px;" class="row2 mb10">
          <label>Nhãn hàng</label>
          <select name="id_brands" required>
            <?php foreach ($listbrands as $brand): ?>
            <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          }
        ?>
      </form>
    </div>
  </div>
</article>
