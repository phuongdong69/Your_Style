<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM ẢNH</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=addimg" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label>HÌNH ẢNH </label> <br>
          <input type="file" name="image">
        </div>

        <div class="row2 mb10">
          <label> TÊN SẢN PHẨM </label> <br>
          <select name="id_product" id="">
            <?php foreach ($listproduct as $listpro) :
              extract($listpro);

            ?>

              <option value="<?= $id ?>"><?= $name ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <input class="mr20" type="submit" name="themanh" value="THÊM MỚI">
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