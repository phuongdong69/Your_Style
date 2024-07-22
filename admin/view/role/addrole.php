<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM ROLE</h1>
    </div>
    <div class="row2 form_content ">
      <form action="index.php?act=addrole" method="POST" enctype="multipart/form-data">


        <div style="width: 200px;" class="row2 mb10">
          <label>Chọn Role</label> <br>
          <select name="roleName" required>
            <option value="" hidden></option>
            <option value="0">Khách Hàng</option>
            <option value="10">Quản Trị Viên</option>
          </select>
        </div>

        <input class="mr20" type="submit" name="themrole" value="THÊM MỚI">
        <a href="index.php?act=listrole"><input  class="mr20" type="button" value="DANH SÁCH"></a>

        <?php
          if(isset($thongbao) &&($thongbao != "")){
            echo $thongbao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>