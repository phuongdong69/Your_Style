<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM DANH MỤC</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">

        <div class="row2 mb10">
          <label>danh mục</label> <br>
          <select name="id_cate" required>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>

        <div class="row2 mb10">
          <label> Tên danh mục </label> <br>
          <input type="text" name="name_cate" placeholder="nhập vào tên danh mục" required>
        </div>

        <div class="row2 mb10">
          <label>Trạng thái</label> <br>
          <select name="status_cate" required>
            <option value="mùa đông">mùa đông</option>
            <option value="mùa hè">mùa hè</option>
          </select>
        </div>

        <input class="mr20" type="submit" name="themdanhmuc" value="THÊM MỚI">
        <a href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>