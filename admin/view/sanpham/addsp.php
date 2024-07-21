<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <!-- <div  class="row2 mb10 form_content_container">
            <label> Danh Mục </label> <br>
              <select style="margin-right: 1250px;" class="sl1" name="">
                  
                  <option value=""></option>
              </select>
            </div> -->

        <div class="row2 mb10">
          <label> TÊN SẢN PHẨM </label> <br>
          <input type="text" name="name" placeholder="nhập vào tên sản phẩm" required>
        </div>
            
        <div class="row2 mb10">
          <label>Mô tả</label> <br>
          <input type="text" name="description" placeholder="nhập vào mô tả sản phẩm" required>
        </div>

        <div class="row2 mb10">
          <label>Giá gốc </label> <br>
          <input type="number" name="price" placeholder="nhập giá tiền" required>
        </div>

        <div class="row2 mb10">
          <label>Giá sale </label> <br>
          <input type="number" name="priceSale" placeholder="nhập giá sale" required>
        </div>

        <div class="row2 mb10">
          <label>Số lượng</label> <br>
          <input type="number" name="quantity" placeholder="nhập số lượng" required>
        </div>

        <div class="row2 mb10">
          <label>Trạng thái</label> <br>
          <select name="status" required>
            <option value="còn hàng">Còn hàng</option>
            <option value="hết hàng">Hết hàng</option>
          </select>
        </div>

        <div class="row2 mb10">
          <label>Tạo lúc</label> <br>
          <input type="datetime-local" name="create_at" placeholder="Tạo sản phẩm lúc">
        </div>

        <div class="row2 mb10">
          <label>cập nhật lúc</label> <br>
          <input type="datetime-local" name="update_at" placeholder="Tạo sản phẩm lúc">
        </div>

        <div class="row2 mb10">
          <label>danh mục</label> <br>
          <select name="id_cate" required>
            <option value="1">áo thun</option>
            <option value="2">áo khoác</option>
          </select>
        </div>

        <div class="row2 mb10">
          <label>nhãn hàng</label> <br>
          <select name="id_brands" required>
            <option value="1">Nhãn hàng 1</option>
            <option value="2">Nhãn hàng 2</option>
          </select>
        </div>

        <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
        <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>