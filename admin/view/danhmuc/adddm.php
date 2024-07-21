<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM DANH MỤC</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
        <div class="row2 mb10">
          <label> Tên danh mục </label> <br>
          <input type="text" name="name" placeholder="nhập vào tên danh mục" required>
        </div>

        <div class="row2 mb10">
          <label>Trạng thái</label> <br>
          <select name="status" required>
            <option value="Mùa xuân">Mùa xuân</option>
            <option value="Mùa hạ">Mùa hạ</option>
            <option value="Mùa thu">Mùa thu</option>
            <option value="Mùa đông">Mùa đông</option>
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