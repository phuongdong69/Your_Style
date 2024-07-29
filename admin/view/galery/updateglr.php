<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>Sửa và cập nhật nhiều hình ảnh</h1>
    </div>
    <div class="row2 form_content">
            <?php
            $product_images = load_images_by_product($id_product);
            ?>
            <form action="index.php?act=updateglr" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_product" value="<?= $id_product ?>">
                <div class="row2 mb10">
                    <label>Thêm ảnh mới</label>
                    <input type="file" name="new_images[]" multiple="multiple">
                </div>
                <div class="row2 mb10">
                    <label>Danh sách ảnh hiện tại</label>
                    <?php foreach ($product_images as $image): ?>
                        <div>
                            <img src="../admin/img/<?= $image['image'] ?>" width="100px" height="75px">
                            <input type="checkbox" name="delete_images[]" value="<?= $image['id'] ?>"> Xóa
                        </div>
                    <?php endforeach; ?>
                </div>
                <input type="submit" name="update_images" value="Cập Nhật">
                <a href="index.php?act=listglr"><input class="mr20" type="button" value="Danh sách thư viện ảnh"></a>
            <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
            </form>
        </div>
  </div>
</article>